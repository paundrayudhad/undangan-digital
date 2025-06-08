<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvitationResource\Pages;
use App\Models\Invitation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class InvitationResource extends Resource
{
    protected static ?string $model = Invitation::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = 'Pengaturan Undangan';

    protected static ?string $modelLabel = 'Pengaturan Undangan';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Pengaturan Gambar')
                    ->tabs([
                        Tabs\Tab::make('Foto Mempelai')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        FileUpload::make('groom_photo')
                                            ->label('Foto Mempelai Pria')
                                            ->image()
                                            ->directory('invitation-galleries')
                                            ->helperText('Upload foto untuk bagian The Groom.'),

                                        FileUpload::make('bride_photo')
                                            ->label('Foto Mempelai Wanita')
                                            ->image()
                                            ->directory('invitation-galleries')
                                            ->helperText('Upload foto untuk bagian The Bride.'),
                                    ]),
                            ]),

                        Tabs\Tab::make('Galeri Foto')
                            ->schema([
                                Fieldset::make('Galeri Kolom (4 Foto)')
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                FileUpload::make('gallery_kolom_1')->label('Kolom Kiri - Atas')->image()->directory('invitation-galleries'),
                                                FileUpload::make('gallery_kolom_2')->label('Kolom Kanan - Atas')->image()->directory('invitation-galleries'),
                                                FileUpload::make('gallery_kolom_3')->label('Kolom Kiri - Bawah')->image()->directory('invitation-galleries'),
                                                FileUpload::make('gallery_kolom_4')->label('Kolom Kanan - Bawah')->image()->directory('invitation-galleries'),
                                            ])
                                    ]),

                                Fieldset::make('Galeri Potrait (2 Foto)')
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                FileUpload::make('gallery_potrait_1')->label('Foto Potrait - Atas')->image()->directory('invitation-galleries'),
                                                FileUpload::make('gallery_potrait_2')->label('Foto Potrait - Bawah')->image()->directory('invitation-galleries'),
                                            ])
                                    ]),

                                Fieldset::make('Galeri "Forever Journey" (6 Foto)')
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                Fieldset::make('Kolom Kiri')
                                                    ->schema([
                                                        FileUpload::make('gallery_journey_1')->label('Foto 1')->image()->directory('invitation-galleries'),
                                                        FileUpload::make('gallery_journey_2')->label('Foto 2')->image()->directory('invitation-galleries'),
                                                        FileUpload::make('gallery_journey_3')->label('Foto 3')->image()->directory('invitation-galleries'),
                                                    ]),
                                                Fieldset::make('Kolom Kanan')
                                                    ->schema([
                                                        FileUpload::make('gallery_journey_4')->label('Foto 4')->image()->directory('invitation-galleries'),
                                                        FileUpload::make('gallery_journey_5')->label('Foto 5')->image()->directory('invitation-galleries'),
                                                        FileUpload::make('gallery_journey_6')->label('Foto 6')->image()->directory('invitation-galleries'),
                                                    ]),
                                            ])
                                    ]),
                            ]),
                    ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->sortable(),
                ImageColumn::make('groom_photo')->label('Foto Pria'),
                ImageColumn::make('bride_photo')->label('Foto Wanita'),
                TextColumn::make('updated_at')->label('Terakhir Diubah')->dateTime()->sortable()->since(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInvitations::route('/'),
            'create' => Pages\CreateInvitation::route('/create'),
            'edit' => Pages\EditInvitation::route('/{record}/edit'),
        ];
    }
}
