<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WeddingSettingResource\Pages;
use App\Models\WeddingSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WeddingSettingResource extends Resource
{
    protected static ?string $model = WeddingSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('Wedding Details')->tabs([
                    Forms\Components\Tabs\Tab::make('Mempelai & Keluarga')
                        ->schema([
                            Forms\Components\TextInput::make('groom_name_full')->required()->label('Nama Lengkap Mempelai Pria'),
                            Forms\Components\TextInput::make('groom_name_short')->required()->label('Nama Panggilan Mempelai Pria'),
                            Forms\Components\TextInput::make('bride_name_full')->required()->label('Nama Lengkap Mempelai Wanita'),
                            Forms\Components\TextInput::make('bride_name_short')->required()->label('Nama Panggilan Mempelai Wanita'),
                            Forms\Components\TextInput::make('groom_father')->required()->label('Nama Ayah Mempelai Pria'),
                            Forms\Components\TextInput::make('groom_mother')->required()->label('Nama Ibu Mempelai Pria'),
                            Forms\Components\TextInput::make('bride_father')->required()->label('Nama Ayah Mempelai Wanita'),
                            Forms\Components\TextInput::make('bride_mother')->required()->label('Nama Ibu Mempelai Wanita'),
                        ])->columns(2),

                    Forms\Components\Tabs\Tab::make('Detail Acara')
                        ->schema([
                            Forms\Components\Section::make('Akad Nikah')
                                ->schema([
                                    Forms\Components\DateTimePicker::make('ceremony_datetime')->required()->label('Tanggal & Waktu'),
                                    Forms\Components\TextInput::make('ceremony_venue')->required()->label('Nama Tempat'),
                                    Forms\Components\Textarea::make('ceremony_address')->required()->label('Alamat Lengkap'),
                                    Forms\Components\TextInput::make('ceremony_map_url')->url()->label('Link Google Maps'),
                                ]),
                            Forms\Components\Section::make('Resepsi')
                                ->schema([
                                    Forms\Components\DateTimePicker::make('reception_datetime')->required()->label('Tanggal & Waktu'),
                                    Forms\Components\TextInput::make('reception_venue')->required()->label('Nama Tempat'),
                                    Forms\Components\Textarea::make('reception_address')->required()->label('Alamat Lengkap'),
                                    Forms\Components\TextInput::make('reception_map_url')->url()->label('Link Google Maps'),
                                ]),
                        ]),
                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('groom_name_full')->label('Mempelai Pria'),
                Tables\Columns\TextColumn::make('bride_name_full')->label('Mempelai Wanita'),
                Tables\Columns\TextColumn::make('reception_datetime')->dateTime()->label('Tanggal Resepsi'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Nonaktifkan bulk actions karena idealnya hanya ada 1 data
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListWeddingSettings::route('/'),
            'create' => Pages\CreateWeddingSetting::route('/create'),
            'edit' => Pages\EditWeddingSetting::route('/{record}/edit'),
        ];
    }    
}