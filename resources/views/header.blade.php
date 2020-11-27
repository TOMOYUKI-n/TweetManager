@section('header')

    <header class="l-navbar__main-wrap" style="z-index: 1000;">
        <div class="l-navbar__align">
            <div class="l-navbar__sp__d-flex">
                <div class="l-navbar__icon">
                    <i class="fas fa-bars js_push"></i>
                </div>
                <div class="logo">
                    <h1><a class="l-navbar__text" href="/">kamitter</a></h1>
                </div>
            </div>
            <!--PC-->
            <nav>
                @guest
                <ul class="l-navbar__section">
                    <li class="l-navbar__list"><a class="l-navbar__text" href="/login"><p>ログイン</p></a></li>
                    @if (Route::has('register'))
                        <li class="l-navbar__list"><a class="l-navbar__text" href="/register"><p>新規登録</p></a></li>
                    @endif
                </ul>
                @else
                <ul class="l-navbar__section ">
                    <li class="l-navbar__list"><a class="l-navbar__text" href="/dashboard"><p><i class="fas fa-home"></i></p></a></li>
                    <li class="l-navbar__list">
                        <a class="l-navbar__text" href="{{ route('logout') }}"
                            onclick ="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <p><i class="fas fa-sign-out-alt"></i></p>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="l-header__sp__form">
                            @csrf
                        </form>
                    </li>
                </ul>
                @endguest
            </nav>
        </div>

    </header>
@show