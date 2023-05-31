<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affaire;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Etape;

use PDF;

class PDFController extends Controller
{
//     public function savePageAsPDF($id)
// {
//     $etapes = Etape::all(); // Fetch the $etapes data from the database or modify the query according to your needs
//     $affaire = Affaire::find($id); // Fetch the $affaire data from the database or modify the query according to your needs

//     $html = view('etapes.index', compact('etapes', 'affaire'))->render();

//     $pdf = PDF::loadHTML($html);

//     // Generate a unique filename for the PDF
//     $filename = 'your-pdf-filename/{$id}.pdf';

//     // Save the PDF file to the storage/app/public directory
//     $pdf->save(public_path('storage/' . $filename));

//     return redirect()->back()->with('success', 'PDF saved successfully.');
// }





public function savePageAsPDF($id)
{
    $affaire = Affaire::find($id);
    $etape = $affaire->Etape()->first();

    // Prepare the HTML code
    $html = '<div class="pt-4">
        <div class="progress-item bg-gray-100 p-5 rounded-lg shadow-md" id="progress-item">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Progress Update #1</h3>
                <span class="text-sm text-gray-500">May 3, 2023</span>
            </div>
            <div class="border-b-2 border-gray-300 pb-4 mb-4">
                <p class="text-gray-700"><strong>Description:</strong> ' . $affaire->Description . '</p>
                <p class="text-gray-700"><strong>Notes:</strong> ' . ($etape ? $etape->notes : '') . '</p> 
                <p class="text-gray-700"><strong>Next Step:</strong> ' . ($etape ? $etape->next_steps : '') . '</p>
                <div class="flex justify-between items-center mb-2">
                    <p class="text-gray-700"><strong>Assigned to:</strong> ' . $affaire->client->name . ' ' . $affaire->client->lastName . '</p>
                    <p class="text-gray-700"><strong>Status:</strong> ' . $affaire->status . '</p>
                </div>
                <div class="flex justify-between items-center mb-2">
                    <p class="text-gray-700"><strong>Priority:</strong> ' . $affaire->priorité . '</p>
                    <p class="text-gray-700"><strong>Deadline:</strong> ' . ($etape ? $etape->deadline : '') . '</p>
                </div>
            </div>
        </div>
    </div>';

    $pdf = PDF::loadHTML($html);

    // Generate a unique filename for the PDF
    $filename = 'your-pdf-filename-' . $id . '.pdf';
    
    // Save the PDF file to the storage/app/public directory
    $pdf->save(public_path('storage/' . $filename));
    
    // Pass the filename to the view or redirect with the filename
    return redirect()->back()->with('success', 'PDF saved successfully.');
    

    

    
}


public function showPDFs()
    {
        // Get the list of PDF files from the storage directory
        $files = Storage::files('public');
        
        // Filter the files to only include PDFs
        $pdfs = array_filter($files, function ($file) {
            return File::extension($file) === 'pdf';
        });

        // Pass the list of PDFs to the view
        return view('pages.rtl')->with('pdfs', $pdfs);

    }
}