 <!--============= Header Section Starts Here =============-->
 <header>
     <div class="header-top">
         <div class="container">
             <div class="header-top-wrapper">
                 <ul class="customer-support">

                 </ul>
                 <ul class="cart-button-area dropdown d-none d-md-flex">

                     <li>
                         <a href="{{asset('profile')}}" class="user-button"><i class="flaticon-user"></i></a>

                     </li>

                 </ul>
             </div>
         </div>
     </div>
     <div class="header-bottom">
         <div class="container">
             <div class="header-wrapper">
                 <div class="logo">
                     <a href="{{asset('/')}}">
                         <img src="{{asset('backend/assets/images/logo/logo-auction.png')}}" alt="logo">
                     </a>
                 </div>
                 <ul class="menu ml-auto">
                     <li>
                         <a href="{{asset('/')}}">Home</a>

                     </li>
                     <li>
                         <a href="{{asset('about')}}">About</a>
                     </li>
                     <li>
                         <a href="{{asset('product')}}">Product</a>
                     </li>

                     <li>
                         <a href="{{asset('blog')}}">Blog</a>
                     </li>

                     <li>
                         <a href="{{asset('contact')}}">Contact</a>
                     </li>                    
                 </ul>
                 <form class="search-form">
                     <input type="text" placeholder="Search Items here....">
                     <button type="submit"><i class="fas fa-search"></i></button>
                 </form>
                 <div class="search-bar d-md-none">
                     <a href="#0"><i class="fas fa-search"></i></a>
                 </div>

             </div>
         </div>
     </div>
 </header>