<?php

namespace App\Http\Controllers\GeneralUser;

use App\Http\Controllers\Controller;
use App\Models\Designer;
use App\Models\DesignerProject;
use App\Models\DesignerRatingReview;
use App\Models\OrderDetails;
use App\Models\Shopkeeper;
use App\Models\ShopProduct;
use App\Models\ShopProductRatingReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReatingReviewController extends Controller
{
    public function productRatingReviewStore(Request $request)
    {
        $orderInfo = OrderDetails::find($request->order_details_id);
        $shop_id = $orderInfo->shop_id;
        $product_id = $orderInfo->product_id;
        $user_id = Auth::user()->id;

        $alreadyCompleted = ShopProductRatingReview::where('product_id', $product_id)->where('customer_id', $user_id)->first();
        if ($alreadyCompleted) {
            return redirect()->back()->with('error', 'Rating review for this product has already been completed');
        }
        $review = new ShopProductRatingReview();
        $review->shop_id = $shop_id;
        $review->customer_id = $user_id;
        $review->product_id = $product_id;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->save();

        $rating = ShopProductRatingReview::where('product_id', $product_id)->get();
        $totalUser = $rating->count();
        $totalRating = $rating->sum('rating');
        $avgRating = $totalRating / $totalUser;

        $product = ShopProduct::find($product_id);
        $product->avg_rating = $avgRating;
        $product->save();


        $shopProduct=ShopProduct::where('user_id',$shop_id)->where('avg_rating','>=',1)->get();
        $shopRatingProduct=$shopProduct->count();
        $shopTotalStar=$shopProduct->sum('avg_rating');
        $shopRating=$shopTotalStar/$shopRatingProduct;


        $shopkeeper=Shopkeeper::find($shop_id);
        $shopkeeper->avg_rating=$shopRating;
        $shopkeeper->save();


        return redirect()->back()->with('success', 'Successfully Submit');
    }


    public function projectRatingReviewStore(Request $request){
        $info= DesignerProject::find($request->project_id);
        $user_id = Auth::user()->id;
        $designerId=$info->designer_id;
        $designer=new DesignerRatingReview();
        $designer->designer_id=$designerId;
        $designer->project_name=$info->title;
        $designer->meeting_name='';
        $designer->customer_id=$user_id;
        $designer->project_id=$request->project_id;
//      $designer->meeting_id=
        $designer->rating=$request->rating;
        $designer->review=$request->review;
        $designer->save();

        $retingInfo=DesignerRatingReview::where('designer_id',$designerId)->get();
        $totalRateUser=$retingInfo->count();
        $totalRating=$retingInfo->sum('rating');
        $avgRating=$totalRating/$totalRateUser;

        $designerInfo=Designer::find($designerId);
        $designerInfo->rating=$avgRating;
        $designerInfo->save();

        return redirect()->back()->with('success', 'Rating Successfully Submit');
    }
}
