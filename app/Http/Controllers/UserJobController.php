<?php
    namespace App\Http\Controllers;

    use App\Models\UserJob; // <-- your model is located inside Models Folder
    use Illuminate\Http\Response; // Response Components
    use App\Traits\ApiResponser; // <-- use to standardized our code

    use Illuminate\Http\Request; // <-- handling http request in lumen
    use DB; // <-- if your not using lumen eloquent you can use DB

    Class UserJobController extends Controller {

        use ApiResponser;

        private $request;

        public function __construct(Request $request){
        $this->request = $request;
        }

//Return the list of usersjob
        public function index()
        {
            $usersjob = UserJob::all();
            return $this->successResponse($usersjob);

        }
// Obtains and show one userjob
        public function show($jobid)
        {
            $userjob = UserJob::findOrFail($jobid);
            return $this->successResponse($usersjob);
        }
}