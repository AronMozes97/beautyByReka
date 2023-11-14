<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use App\Models\Rental;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function getAllMakeup()
    {
        $makeups = Pricing::where('category', 'smink')->get();

        return view('makeup', compact('makeups'));
    }

    public function getAllMakeupTattoo()
    {
        $tattoo = Pricing::where('category', 'Sminktetoválás')->get();

        return view('makeup_tattoo', compact('tattoo'));
    }

    public function getAllPrice()
    {
        $facials = Pricing::where('category', 'Arckezelések')->get();

        $facialBundles = Pricing::with('rental')
            ->whereHas('rental')
            ->where('category', 'Arckezelések')
            ->get();

        $machineTreatments = Pricing::where('category', 'Gépi kezelések')->get();

        $machineTreatmentBundles = Pricing::with('rental')
            ->whereHas('rental')
            ->where('category', 'Gépi kezelések')
            ->get();

        $bundleCombo = $this->getBundleCombo();

        $makeups = Pricing::where('category', 'Smink')->get();


        $eyebrow = Pricing::where('category', 'Szempilla/Szemöldök')->get();

        $resin = Pricing::where('category', 'Gyanta')->get();

        $makeupTattoos = Pricing::where('category', 'Sminktetoválás')->get();

        return view(
            'price_list',
            compact(
                'facials',
                'facialBundles',
                'machineTreatments',
                'machineTreatmentBundles',
                'bundleCombo',
                'makeups',
                'eyebrow',
                'resin',
                'makeupTattoos'
            )
        );
    }

    private function getBundleCombo()
    {
        return [
            [
                'name' => 'Kombinált bérlet arc',
                'features' => '3x rádiófrekvencia + 2x Anti-age',
                'price' => 45000
            ],
            [
                'name' => 'Kombinált bérlet arc+nyak',
                'features' => '3x rádiófrekvencia + 2x Anti-age',
                'price' => 53500
            ],
            [
                'name' => 'Kombinált bérlet arc+nyak+dekoltázs',
                'features' => '3x rádiófrekvencia + 2x Anti-age',
                'price' => 62000
            ],
        ];
    }
}
