<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Department;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DepartmentResource\Pages;
use App\Filament\Resources\DepartmentResource\RelationManagers;

class DepartmentResource extends Resource
{
    protected static ?string $model = Department::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Select::make('department')
            ->options([
                'Finance' => 'Administration & Finance',
                'Sanitation' => 'Environment & Sanitation',
                'Urban' => 'Urban Development',
                'Enforcement' => 'Enforcement & Compliance',
                'Fire' => 'Fire & Disaster Management',
                ])
                ->native(false),
                TextInput::make('hod')->label('HOD Full Name')
                ->required()
                ->rule('alpha')
                ->placeholder('Enter full name'),
                
                TextInput::make('description')
                ->label('Designation')
                ->Placeholder('e.g Head of Finance')
                ->required()
                ->rules('alpha'),
                   
               
                FileUpload::make('photo')
                ->label('Upload HOD Photo')
                ->acceptedFileTypes([
                    'application/pdf', // PDF
                    'application/msword', // DOC
                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document', // DOCX
                    'image/png', // PNG Images
                    'image/jpeg', // JPG Images
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('department'),
                TextColumn::make('description'),
                TextColumn::make('hod'),
                ImageColumn::make('photo'),
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
            'index' => Pages\ListDepartments::route('/'),
            'create' => Pages\CreateDepartment::route('/create'),
            'edit' => Pages\EditDepartment::route('/{record}/edit'),
        ];
    }
}
