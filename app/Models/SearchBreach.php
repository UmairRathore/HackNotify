<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchBreach extends Model
{
    use HasFactory;

    protected $table = "search_breaches";
    protected $fillable =
        [
            'company_id',
            'phone',
            'email',
            'password',

        ];

    public function companyData()
    {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }

    public function search_breach_list($search, $offset, $limit_t)
    {
        $query = self::query();
        $query->where(function ($q) use ($search) {
            $q->orWhereHas('username', function ($q) use ($search) {
                return $q->where('first_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('last_name', 'LIKE', '%' . $search . '%');
            });
        });
        $corporateIds = CorporateUsers::groupBy('corporate_id')->pluck('corporate_id')->all();
        $corporateUserIds = CorporateUsers::pluck('user_id')->all();
        if (!$iscorporate) {
            $data_filter = array_merge($corporateUserIds, $corporateIds);
            $query->whereNotIn('user_id', $data_filter);
            $query->where('plan_name', $plan_cat);
        } else {
            $query->whereIn('user_id', $corporateIds);
        }
        if (!empty($visit_pass)) {
            $query->where('visit_pass', $visit_pass);
        }
        if (!empty($startdate) && !empty($enddate)) {
            $query->whereBetween('created_at', [$startdate, $enddate]);
        }
        $query->skip($offset);
        $query->take($limit_t);
        $query->orderBy('created_at', 'DESC');
        $data = $query->get();

        foreach ($data as $item) {
            $userVisitedgym = DB::select("select count(*) as total_checkin, sum(gym_earn_amount) as total_earning from user_visited_gym where check_in_status=1 and user_id = $item->user_id  and usersubscription_id=$item->id group by user_id");

            if ($userVisitedgym) {
                $item->total_checkin = $userVisitedgym[0]->total_checkin;
                $item->total_earning = $userVisitedgym[0]->total_earning;
            } else {
                $item->total_checkin = 0;
                $item->total_earning = 0;
            }
        }
        return $data;
    }
}
