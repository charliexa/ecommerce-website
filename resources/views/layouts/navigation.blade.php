<style>
    .css2 {
        color: black;
        font-size: 20px;
        font-family: Leelawadee UI Semilight;
        font-style: italic;
        font-weight: 600;
        letter-spacing: 3px;
    }
    .slider {
        background-image: url("http://localhost:8000/storage/images/bg-slider/background_slider.jpg");
        background-size: cover;
        height: fit-content;
    }
</style>
<div class="slider flex">
    <marquee class="css2" direction="left">
        sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold
        sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold
        sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold
        sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold
        sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold
        sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold
        sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold sold
    </marquee>
</div>
<header x-data="{
    cartItemsCount: {{ \App\Helpers\Cart::getCartItemsCount() }},
    mobileSearchOpen: false,
    }" @cart-change.window="cartItemsCount = $event.detail.count"
    class="flex bg-neutral-800 shadow-md text-white items-center box-border">
    <div class="container flex items-center justify-between sm:px-5">
    <button @click="mobileSearchOpen = !mobileSearchOpen" class="flex text-xl md:hidden"><i class="fa-solid fa-magnifying-glass"></i></button>
    <!-- serachMenu -->
    <div
    class="-left-full block fixed z-20 top-0 bottom-0 height transition-all h-full w-[80vw] bg-slate-900 md:hidden p-2"
    :class="mobileSearchOpen ? 'left-0' : '-left-[100%]'"
    >
        <div class="relative">
            <button @click="mobileSearchOpen = !mobileSearchOpen" class="absolute right-5 top-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#d0021b" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>
        <h1 class="p-4 text-xl">Search</h1>
        <form action="" class="w-full relative flex items-center justify-center mt-4">
            <input type="text" class="w-[80%] rounded text-gray-800">
            <button class="text-gray-900 absolute right-[13%]">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
        <div class="mt-10">
            <h2 class="p-4">POPULAR PRODUCTS</h2>
            <hr>
            <div id="someProducts">

            </div>
        </div>
    </div>
    <!-- serachMenu -->
    <div>
        <a href="{{ route('home') }}" class="block py-3 sm:text-xl text-2xl ml-[40%] lg:ml-0"> XStore </a>
    </div>
    <p class="w-[120px] hidden lg:flex">
        Available 24/7 at
        Mohammedia
    </p>
    <form action="" class="relative hidden md:flex">
        <input type="text" class="rounded-full w-[50vw] sm:w-[28vw] h-[30px] sm:h-[40px] text-black">
        <button type="submit" class="absolute right-2 sm:right-3 top-[4px] sm:top-2 text-gray-900">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </form>
    <nav class="hidden md:block">
        <ul class="flex items-center justify-center">
            <li>
                <a
                    href="{{ route('cart.index') }}"
                    class="relative inline-flex items-center py-3 px-[5px] hover:bg-slate-900 gap-1"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                    Wish Lists
                    <small
                        x-show="cartItemsCount"
                        x-transition
                        x-cloak
                        x-text="cartItemsCount"
                        class="absolute z-[100] top-4 -right-3 py-[2px] px-[8px] rounded-full bg-red-500"
                    ></small>
                </a>
            </li>
            <li>
                <a
                    href="{{ route('cart.index') }}"
                    class="relative inline-flex items-center py-3 px-[5px] hover:bg-slate-900"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 mr-2"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                        />
                    </svg>
                    Cart
                    <small
                        x-show="cartItemsCount"
                        x-transition
                        x-cloak
                        x-text="cartItemsCount"
                        class="absolute z-[100] top-4 -right-3 py-[2px] px-[8px] rounded-full bg-red-500"
                    ></small>
                </a>
            </li>
            @if (!Auth::guest())
                <li x-data="{open: false}" class="relative">
                    <a
                        @click="open = !open"
                        class="cursor-pointer flex items-center py-3 px-[5px] pr-5 hover:bg-slate-900"
                    >
              <span class="flex items-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 mr-2"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                  <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                  />
                </svg>
                My Account
              </span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 ml-2"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </a>
                    <ul
                        @click.outside="open = false"
                        x-show="open"
                        x-transition
                        x-cloak
                        class="absolute z-10 right-0 bg-slate-800 py-2 w-48"
                    >
                        <li>
                            <a
                                href="{{ route('profile') }}"
                                class="flex px-3 py-2 hover:bg-slate-900"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-2"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                    />
                                </svg>
                                My Profile
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{ route('order.index') }}"
                                class="flex px-3 py-2 hover:bg-slate-900"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-2"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                                    />
                                </svg>
                                My Orders
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                   class="flex px-3 py-2 hover:bg-slate-900"
                                   onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 mr-2"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                                        />
                                    </svg>
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li>
                    <a
                        href="{{ route('register') }}"
                        class="flex items-center py-3 px-[5px] hover:bg-slate-900"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 mr-2"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                            />
                        </svg>
                        Register
                    </a>
                </li>
                <li>
                    <a
                        href="{{ route('login') }}"
                        class="flex items-center py-3 px-[5px] hover:bg-slate-900 gap-1"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3"/><circle cx="12" cy="10" r="3"/><circle cx="12" cy="12" r="10"/></svg>
                    Login
                    </a>
                </li>
            @endif
        </ul>
    </nav>
    <div class="flex items-center gap-3 md:hidden">
    <a
        class="relative inline-flex items-center px-2 py-3 hover:bg-slate-900"
        href="{{ route('cart.index') }}"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 mr-2"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
            />
        </svg>
        Cart
        <small
            x-show="cartItemsCount"
            x-transition
            x-cloak
            x-text="cartItemsCount"
            class="absolute z-[100] top-4 -right-3 py-[2px] px-[8px] rounded-full bg-red-500"
        ></small>
    </a>
    </div>
    </div>

    <div class="fixed w-full bg-gray-800 flex items-center justify-around md:hidden bottom-0 z-10">
        @if (!Auth::guest())
        <a
            href="{{ route('profile') }}"
            class="flex flex-col items-center py-3 px-[5px] hover:text-gray-200 gap-1 hover:bg-gray-900 text-xs"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                />
            </svg>
            My Profile
        </a>
        <a
            href="{{ route('order.index') }}"
            class="flex flex-col items-center py-3 px-[5px] hover:text-gray-200 gap-1 hover:bg-gray-900 text-xs"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                />
            </svg>
            My Orders
        </a>
        <a
            href="{{ route('cart.index') }}"
            class="flex flex-col items-center py-3 px-[5px] hover:text-gray-200 gap-1 hover:bg-gray-900 text-xs"
        >
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
            Wish Lists
            <small
                x-show="cartItemsCount"
                x-transition
                x-cloak
                x-text="cartItemsCount"
                class="absolute z-[100] top-4 -right-3 py-[2px] px-[8px] rounded-full bg-red-500"
            ></small>
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a href="{{ route('logout') }}"
                class="flex flex-col items-center py-3 px-[5px] hover:text-gray-200 gap-1 hover:bg-gray-900 text-xs"
                onclick="event.preventDefault();
                    this.closest('form').submit();">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 mr-2"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                    />
                </svg>
                {{ __('Log Out') }}
            </a>
        </form>
        @else
        <a
            href="{{ route('register') }}"
            class="flex flex-col items-center py-3 px-[5px] hover:text-gray-200 gap-1 hover:bg-gray-900 text-xs"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                />
            </svg>
            Register
        </a>
        <a
            href="{{ route('cart.index') }}"
            class="flex flex-col items-center py-3 px-[5px] hover:text-gray-200 gap-1 hover:bg-gray-900 text-xs"
        >
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
            Wish Lists
            <small
                x-show="cartItemsCount"
                x-transition
                x-cloak
                x-text="cartItemsCount"
                class="absolute z-[100] top-4 -right-3 py-[2px] px-[8px] rounded-full bg-red-500"
            ></small>
        </a>
        <a
            href="{{ route('login') }}"
            class="flex flex-col items-center py-3 px-[5px] hover:text-gray-200 gap-1 hover:bg-gray-900 text-xs"
        >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3"/><circle cx="12" cy="10" r="3"/><circle cx="12" cy="12" r="10"/></svg>
        Login
        </a>
        @endif
    </div>
</header>
