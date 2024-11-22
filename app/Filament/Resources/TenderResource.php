<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Tender;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TenderResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TenderResource\RelationManagers;

class TenderResource extends Resource
{
    protected static ?string $model = Tender::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';
    protected static ?string $navigationGroup = 'Media Desk';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('Tender_no')
                ->required()
                ->placeholder('Enter tender no')
                ->label('Tender Number'),
                TextInput::make('Title')
                ->required()
                ->rules('regex:/^[a-zA-Z\s]*$/')
                ->placeholder('Enter project title')
                ->label('Project Name'),
                DatePicker::make('end_date'),
                FileUpload::make('tender')
                ->label('Upload Tender Document')
                ->preserveFilenames()
                ->acceptedFileTypes([
                    'application/pdf', // PDF
                    'application/msword', // DOC
                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document', // DOCX
                    'image/png', // PNG Images
                    'image/jpeg', // JPG Images
                ])->maxSize(70240),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Tender_no'),
                TextColumn::make('Title'),
                TextColumn::make('end_date'),
                TextColumn::make('tender'),
            ])
            ->filters([
                
                
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
            'index' => Pages\ListTenders::route('/'),
            'create' => Pages\CreateTender::route('/create'),
            'edit' => Pages\EditTender::route('/{record}/edit'),
        ];
    }
}
