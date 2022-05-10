<?php

namespace App\Http\Controllers\Admin\Clients\Word;

use App\Exports\ClientsExport;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;

class ExportController extends Controller
{
    public function __invoke($id)
    {
        $client = Client::findOrFail($id);

        $phpWord = new PhpWord();

        $section = $phpWord->addSection();

        $section->addText('Справка', [
            'size' => 18, 'color' => '#000', 'bold' => true
        ]);
        $section->addText('');

        $section->addText('Подтверждает действительность заключение договора от ' . $client->date . ' с компанией ' . $client->title .
            ' на сумму ' . $client->price, [
            'size' => 13, 'color' => '#545454', 'italic' => true
        ]);

        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save(storage_path('word/' . $client->title . '.docx'));
        return response()->download(storage_path('word/' . $client->title . '.docx'));
    }
}
