@prepend('css')
<link rel="stylesheet" href="{{ asset('client/components/organisms/navbar/style.css') }}">

@endprepend
<style>
  .header {
    border-bottom: 1px solid #f8f8f9;
  }
</style>
<header class="header bg-white" id="header">
  <div class="d-flex flex-row align-items-center justify-content-between container py-3">
    <a href="/" id="logo">
      <img style="width: 2rem;" src="{{ asset('shop/'.$path) }}" alt="">
    </a>
    <div>
      <x-molecules.navbar.search-bar/>
    </div>
    {{-- turn on --}}
    {{-- <div class="d-flex flex-row gx-4">
      <x-molecules.navbar.menu />
      <x-molecules.navbar.search-bar/>
    </div> --}}
  </div>
</header>
@prepend('js')
  <script>
    const navMenu = document.getElementById("nav-menu"),
    navToggle = document.getElementById("nav-toggle"),
    navClose = document.getElementById("nav-close"),
    logo = document.getElementById("logo");

    if (navToggle) {
        navToggle.addEventListener("click", () => {
            navMenu.classList.add("show-menu");
        });
    }

    if (navClose) {
        navClose.addEventListener("click", () => {
            navMenu.classList.remove("show-menu");
        });
    }

    function Onfocus() {
        if (window.matchMedia("(min-width:767px)").matches) {
            navMenu.classList.add("d-none");
        } else {
            logo.classList.add("d-none");
        }
    }

    function Onblur() {
        if (window.matchMedia("(min-width:767px)").matches) {
            navMenu.classList.remove("d-none");
        } else {
            logo.classList.remove("d-none");
        }
    }
  </script>
@endprepend