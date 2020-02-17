<?PHP

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factoory as Faker;



class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $fake = Faker::create()
         $user = new User;
         $user->name=$fake->name;
         $user->email=$fake->email;
         $user->email_verified_at = now();
         $user->password=Hash::make(Str::random(6)));
         $user->save();
    }
}
