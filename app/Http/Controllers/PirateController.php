<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App;

class PirateController extends Controller
{

    public function index(Request $request)
    {
        return view('pirates.index')->with([
            'firstName' => $request->session()->get('firstName', ''),
            'month' => $request->session()->get('month', null),
            'lastName' => $request->session()->get('lastName', ''),
            'reverseName' => $request->session()->get('reverseName', false),
            'newPirateName' => $request->session()->get('newPirateName', []),
            'image' => $request->session()->get('image', ''),
        ]);
    }

    public function nameProcess(Request $request)
    {
        # Validate the request data
        $request->validate([
            'firstName' => 'required|alpha',
            'month' => 'required',
            'lastName' => 'required|alpha',
        ]);

        # Initialize array to store pirate name
        $newPirateName = [];

        $firstName = $request->input('firstName', null);
        $month = $request->input('month', null);
        $lastName = $request->input('lastName', null);

        $firstNameLetter = strtoupper($firstName[0]);
        $lastNameLetter = strtoupper($lastName[0]);


        if ($firstName) {

            $pirateNamesRawData = file_get_contents(database_path('/names.json'));

            $pirateNames = json_decode($pirateNamesRawData, true);

            foreach ($pirateNames as $jsonGroup => $group) {
                foreach ($group as $key => $pirateName) {
                    if ($jsonGroup == "FirstName") {
                        if ($key == $firstNameLetter) {
                            $newPirateName["first"] = $pirateName;
                        }
                    } else if ($jsonGroup == "Birthday") {
                        if ($key == $month) {
                            $newPirateName["middle"] = $pirateName;
                        }
                    } else {
                        if ($key == $lastNameLetter) {
                            $newPirateName["last"] = $pirateName;
                        }
                    }
                }
            }
        }

        $imageURLs = [
            "images/bird_28.png",
            "images/penguin_28.png",
            "images/pirate-pipe_28.png",
            "images/pirate-skull_28.png"
        ];

        $randomImageKey = array_rand($imageURLs, 1);

        $imageRandom = $imageURLs[$randomImageKey];

        return redirect('/')->with([
            'firstName' => $firstName,
            'month' => $month,
            'lastName' => $lastName,
            'reverseName' => $request->has('reverseName'),
            'newPirateName' => $newPirateName,
            'image' => $imageRandom,
        ]);
    }
}