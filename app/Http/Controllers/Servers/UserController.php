<?php

namespace App\Http\Controllers\Servers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\{
    StoreUserRequest,
    UpdateUserRequest,
};

use App\Services\Interfaces\UserServiceInterface as UserService;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceRepository;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;
use App\Repositories\Interfaces\UserCatalogueRepositoryInterface as UserCatalogueRepository;



class UserController extends Controller
{
    protected $userService;
    protected $provinceRepository;
    protected $userRepository;
    protected $userCatalogueRepository;

    // Sử dụng dependency injection chuyển đổi đối tượng của một lớp được đăng ký trong container
    public function __construct(
        UserService $userService,
        UserRepository $userRepository,
        UserCatalogueRepository $userCatalogueRepository,
    ) {
        $this->userService = $userService;
        $this->userRepository = $userRepository;
        $this->userCatalogueRepository = $userCatalogueRepository;
    }
    //
    public function index()
    {
        $this->authorize('modules', 'users.index');


        $users = $this->userService->paginate();
        $userCatalogues = $this->userCatalogueRepository->all();
        $config['seo'] = __('messages.user')['index'];

        return view('servers.users.index', compact([
            'users',
            'config',
            'userCatalogues'
        ]));
    }

    public function create()
    {
        $this->authorize('modules', 'users.create');

        $userCatalogues = $this->userCatalogueRepository->all();

        $config['seo'] = __('messages.user')['create'];
        $config['method'] = 'create';
        return view('servers.users.store', compact([
            'config',
            'userCatalogues'
        ]));
    }

    public function store(StoreUserRequest $request)
    {
        $successMessage = $this->getToastMessage('user', 'success', 'create');
        $errorMessage = $this->getToastMessage('user', 'error', 'create');

        if ($this->userService->create()) {
            return redirect()->route('users.index')->with('toast_success', $successMessage);
        }
        return redirect()->route('users.create')->with('toast_error', $errorMessage);
    }


    public function edit($id)
    {
        $this->authorize('modules', 'users.edit');

        // Gán id vào sesson
        session(['_id' => $id]);
        $userCatalogues = $this->userCatalogueRepository->all();
        $user = $this->userRepository->findById($id);
        // dd($user);


        $config['seo'] = __('messages.user')['update'];
        $config['method'] = 'update';

        return view('servers.users.store', compact([
            'config',
            'user',
            'userCatalogues',
        ]));
    }


    public function update(UpdateUserRequest $request, $id)
    {

        $successMessage = $this->getToastMessage('user', 'success', 'update');
        $errorMessage = $this->getToastMessage('user', 'error', 'update');

        // Lấy giá trị sesson
        $idUser = session('_id');
        if (empty($idUser)) {
            return redirect()->route('users.index')->with('toast_error', $errorMessage);
        }

        if ($this->userService->update($idUser)) {
            // Xoá giá trị sesson
            session()->forget('_id');
            return redirect()->route('users.index')->with('toast_success', $successMessage);
        }
        // Xoá giá trị sesson
        session()->forget('_id');
        return redirect()->route('users.create')->with('toast_error', $errorMessage);
    }


    public function destroy(Request $request, $id)
    {
        $this->authorize('modules', 'users.destroy');

        $successMessage = $this->getToastMessage('user', 'success', 'delete');
        $errorMessage = $this->getToastMessage('user', 'error', 'delete');

        if ($request->_id == null) {
            return redirect()->route('users.index')->with('toast_error', $errorMessage);
        }
        if ($this->userService->destroy($request->_id)) {

            return redirect()->route('users.index')->with('toast_success', $successMessage);
        }
        return redirect()->route('users.index')->with('toast_error', $errorMessage);
    }
}
