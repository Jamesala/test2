<?php
/**
 * Created by PhpStorm.
 * User: ToXaHo
 * Date: 21.04.2017
 * Time: 19:26
 */

namespace App\Http\Controllers;

use App\Cases;
use App\Item;
use App\Live;
use App\User;

class PagesController extends Controller
{

    public function index()
    {
        $case = Cases::where('id', 1)->first();
        $items = [];
        foreach (json_decode($case->items) as $item) {
            $item1 = Item::where('id', $item)->first();
            for ($i = 0; $i < 10; $i++) {
                $items[] = $item1;
            }
        }
        shuffle($items);
        $cases = Cases::where('id', '>', 1)->orderBy('id', 'desc')->get();
        return view('pages.index', compact('items', 'case', 'cases'));
    }

    public function cases($id)
    {
        $case = Cases::where('id', $id)->first();
        if (is_null($case)) return redirect('/');
        $items = [];
        $demoItems = [];
        foreach (json_decode($case->items) as $item) {
            $item1 = Item::where('id', $item)->first();
            for ($i = 0; $i < 10; $i++) {
                $items[] = $item1;
            }
            $demoItems[] = $item1;
        }
        usort($demoItems, function($a, $b){
            return ($b['sell_price'] - $a['sell_price']);
        });
        return view('pages.case', compact('case', 'demoItems', 'items'));
    }

    public function price()
    {
        $case = Cases::where('id', 1)->first();
        $items = [];
        foreach (json_decode($case->items) as $item) {
            $item1 = Item::where('id', $item)->first();
            $items[] = $item1;
        }
        usort($items, function($a, $b){
            return ($b['sell_price'] - $a['sell_price']);
        });
        return view('pages.price', compact('items'));
    }

    public function oplata()
    {
        return view('pages.oplata');
    }

    public function account()
    {
        $count_ref = User::where('affiliate_use', $this->user->affiliate_code)->count();
        $wins = Live::where('user_id', $this->user->id)->orderBy('id', 'desc')->get();
        foreach ($wins as $win) {
            $win->item = Item::where('id', $win->item_id)->first();
        }
        return view('pages.account', compact('count_ref', 'wins'));
    }

    public function get($id)
    {
        $live = Live::where('id', $id)->where('user_id', $this->user->id)->first();
        if (is_null($live)) return redirect('/');
        $live->item = Item::where('id', $live->item_id)->first();
        return view('pages.get', compact('live'));
    }

    public function feedback()
    {
        return view('pages.feedback');
    }

    public function faq()
    {
        return view('pages.faq');
    }

}