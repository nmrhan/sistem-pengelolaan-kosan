<?php

namespace App\Repositories;

use App\Interfaces\BoardingHouseRepositoryInterface;
use App\Models\BoardingHouse;
use App\Models\Category;
use App\Models\Room;
use illuminate\Database\Eloquent\Builder;
use PhpParser\Node\Expr\FuncCall;

use function Laravel\Prompts\search;

class BoardingHouseRepository implements BoardingHouseRepositoryInterface
{
  public function getAllBoardingHouses($search = null, $city = null, $category = null)
  {

    $query = BoardingHouse::query();
    // ketika search diisi maka akan dijalankan 
    if ($search) {
      $query->where('name', 'like', '%' . $search . '%');
    }
    // ketika city  diisi maka akan dijalankan 
    if ($city) {
      $query->whereHas('city', function (Builder $query) use ($city) {
        $query->where('slug', $city);
      });
    }
    // ketika category diisi maka akan dijalankan 

    if ($category) {
      $query->whereHas('category', function (Builder $query) use ($category) {
        $query->where('slug', $category);
      });
    }
    return $query->get();
  }
  public function getPopularBoardingHouses($limit = 5)
  {
    return BoardingHouse::withCount('transactions')->orderBy('transactions_count', 'desc')->take($limit)->get();
  }

  public function getBoardingHouseByCitySlug($slug)
  {
    return BoardingHouse::whereHas('city', function (Builder $query) use ($slug) {
      $query->where('slug', $slug);
    })->get();
  }
  public function getBoardingHouseByCategorySlug($slug)
  {
    return BoardingHouse::whereHas('category', function (Builder $query) use ($slug) {
      $query->where('slug', $slug);
    })->get();
  }
  public function getBoardingHouseBySlug($slug)
  {
    return BoardingHouse::where('slug', $slug)->first();
  }
  public function getBoardingHouseById($id)
  {
    return Room::find($id);
  }
}
