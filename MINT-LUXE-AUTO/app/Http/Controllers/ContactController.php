<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        try {
            $request->validate([
                'nom' => 'required|string|max:255',
                'prenom' => 'required|string|max:255',
                'email' => 'required|email',
                'telephone' => 'required|string',
                'message' => 'required|string'
            ]);

            $messageData = [
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'telephone' => $request->telephone,
                'userMessage' => $request->message
            ];

            Mail::send('emails.contact', $messageData, function($message) use ($messageData) {
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                       ->to(env('MAIL_USERNAME'), 'Mint Luxe Auto')
                       ->subject('Nouveau message de contact');
            });

            return back()->with('success', 'Message envoyé avec succès!');

        } catch (\Exception $e) {
            return back()->with('error', 'Échec de l\'envoi du message: ' . $e->getMessage());
        }
    }
} 