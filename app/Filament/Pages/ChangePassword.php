<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Hash;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class ChangePassword extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-key';
    protected static string $view = 'filament.pages.change-password';
    protected static ?string $title = 'Ubah Password';
    protected static ?string $navigationLabel = 'Ubah Password';

    public ?string $current_password = '';
    public ?string $new_password = '';
    public ?string $new_password_confirmation = '';

    public function mount(): void
    {
        $this->form->fill();
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('current_password')
                ->label('Password Sekarang')
                ->password()
                ->required()
                ->rule('current_password'),
            TextInput::make('new_password')
                ->label('Password Baru')
                ->password()
                ->required()
                ->minLength(6),
            TextInput::make('new_password_confirmation')
                ->label('Konfirmasi Password Baru')
                ->password()
                ->same('new_password')
                ->required(),
        ];
    }

    public function submit(): void
    {
        $user = Auth::user();

        $this->validate([
            'current_password' => ['required', 'current_password'],
            'new_password' => ['required', 'min:6', 'confirmed'],
        ]);

        $user->password = Hash::make($this->new_password);
        $user->save();

        Notification::make()
            ->title('Password berhasil diubah')
            ->success()
            ->send();

        // Kosongkan field
        $this->current_password = '';
        $this->new_password = '';
        $this->new_password_confirmation = '';
    }

    protected function getFormModel(): string
    {
        return Auth::user()::class;
    }
}
