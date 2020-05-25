<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class FavouritesController extends Controller
{
    public function store()
    {
        try
        {
            $user = auth()->user();
            $letting = DB::table($request->input())($lettingId);
            $user->recordActivity(‘favourited’, $letting);
        } catch (FavouriteNotFoundException $e)
        {
            throw new FavouriteNotFoundException($e->getMessage());
        }
        return redirect()->back();
    }
    /**
     * Grab the lettingId and detach it from the likes and then find the Letting
     * and record the activity.
     *
     * @param $lettingId
     * @return \Illuminate\Http\RedirectResponse
     * @throws FavouriteNotFoundException
     */
    public function destroy($lettingId)
    {
        try
        {
            $user = auth()->user();
            $user->favourites()->detach($lettingId);
            $letting = Letting::find($lettingId);
            $user->recordActivity(‘unfavourited’, $letting);
        } catch (FavouriteNotFoundException $e)
        {
            throw new FavouriteNotFoundException($e->getMessage());
        }
        return redirect()->back();
    }
}
