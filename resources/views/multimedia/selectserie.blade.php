@extends ('layouts.multimedia')
@section('content')


<div class="containerselect">

<div>

    <h1 class="titlemultimedia">{{$serie-> title}}</h1>

    <div class="elements">
     <p class="info">{{$serie-> duration}} min</p>
     <p class="info">Año  {{$serie-> year}}</p>
     <p class="info">Temporada</p>
     <a href="{{route('rep_episode',$serie->id)}}">
         <svg width="120" height="69" viewBox="0 0 80 19" fill="none" xmlns="http://www.w3.org/2000/svg">
             <rect width="80" height="19" fill="#FEC61A"/>
             <path d="M5 2L16.5 10L5 17V2Z" fill="black"/>
             <path d="M22.4121 9.03027H22.9004C23.3789 9.03027 23.7321 8.95052 23.96 8.79102C24.1878 8.63151 24.3018 8.38086 24.3018 8.03906C24.3018 7.70052 24.1846 7.45964 23.9502 7.31641C23.7191 7.17318 23.3594 7.10156 22.8711 7.10156H22.4121V9.03027ZM22.4121 10.2607V13H20.8984V5.86133H22.9785C23.9486 5.86133 24.6663 6.03874 25.1318 6.39355C25.5973 6.74512 25.8301 7.2806 25.8301 8C25.8301 8.41992 25.7145 8.79427 25.4834 9.12305C25.2523 9.44857 24.9251 9.7041 24.502 9.88965C25.5762 11.4945 26.276 12.5312 26.6016 13H24.9219L23.2178 10.2607H22.4121ZM29.6436 8.49805C29.3278 8.49805 29.0804 8.59896 28.9014 8.80078C28.7223 8.99935 28.6198 9.28255 28.5938 9.65039H30.6836C30.6771 9.28255 30.5811 8.99935 30.3955 8.80078C30.21 8.59896 29.9593 8.49805 29.6436 8.49805ZM29.8535 13.0977C28.9746 13.0977 28.2878 12.8551 27.793 12.3701C27.2982 11.8851 27.0508 11.1982 27.0508 10.3096C27.0508 9.39486 27.2786 8.68848 27.7344 8.19043C28.1934 7.68913 28.8265 7.43848 29.6338 7.43848C30.4053 7.43848 31.0059 7.6582 31.4355 8.09766C31.8652 8.53711 32.0801 9.14421 32.0801 9.91895V10.6416H28.5596C28.5758 11.0648 28.7012 11.3952 28.9355 11.6328C29.1699 11.8704 29.4987 11.9893 29.9219 11.9893C30.2507 11.9893 30.5615 11.9551 30.8545 11.8867C31.1475 11.8184 31.4535 11.7093 31.7725 11.5596V12.7119C31.512 12.8421 31.2337 12.9382 30.9375 13C30.6413 13.0651 30.2799 13.0977 29.8535 13.0977ZM36.2891 13.0977C35.6478 13.0977 35.1449 12.8649 34.7803 12.3994H34.7021C34.7542 12.8551 34.7803 13.1188 34.7803 13.1904V15.4023H33.291V7.54102H34.502L34.7119 8.24902H34.7803C35.1286 7.70866 35.6445 7.43848 36.3281 7.43848C36.9727 7.43848 37.4772 7.6875 37.8418 8.18555C38.2064 8.68359 38.3887 9.37533 38.3887 10.2607C38.3887 10.8434 38.3024 11.3496 38.1299 11.7793C37.9606 12.209 37.7181 12.5361 37.4023 12.7607C37.0866 12.9854 36.7155 13.0977 36.2891 13.0977ZM35.8496 8.62988C35.4818 8.62988 35.2132 8.74382 35.0439 8.97168C34.8747 9.19629 34.7868 9.56901 34.7803 10.0898V10.251C34.7803 10.8369 34.8665 11.2568 35.0391 11.5107C35.2148 11.7646 35.4915 11.8916 35.8691 11.8916C36.5365 11.8916 36.8701 11.3415 36.8701 10.2412C36.8701 9.7041 36.7871 9.30208 36.6211 9.03516C36.4583 8.76497 36.2012 8.62988 35.8496 8.62988ZM42.666 7.43848C42.8678 7.43848 43.0355 7.45312 43.1689 7.48242L43.0566 8.87891C42.9362 8.84635 42.7897 8.83008 42.6172 8.83008C42.1419 8.83008 41.7708 8.95215 41.5039 9.19629C41.2402 9.44043 41.1084 9.78223 41.1084 10.2217V13H39.6191V7.54102H40.7471L40.9668 8.45898H41.04C41.2093 8.15299 41.4372 7.90723 41.7236 7.72168C42.0133 7.53288 42.3275 7.43848 42.666 7.43848ZM45.3467 10.2607C45.3467 10.8011 45.4346 11.2096 45.6104 11.4863C45.7894 11.763 46.0791 11.9014 46.4795 11.9014C46.8766 11.9014 47.1615 11.7646 47.334 11.4912C47.5098 11.2145 47.5977 10.8044 47.5977 10.2607C47.5977 9.72038 47.5098 9.3151 47.334 9.04492C47.1582 8.77474 46.8701 8.63965 46.4697 8.63965C46.0726 8.63965 45.7861 8.77474 45.6104 9.04492C45.4346 9.31185 45.3467 9.71712 45.3467 10.2607ZM49.1211 10.2607C49.1211 11.1494 48.8867 11.8444 48.418 12.3457C47.9492 12.847 47.2965 13.0977 46.46 13.0977C45.9359 13.0977 45.4736 12.9837 45.0732 12.7559C44.6729 12.5247 44.3652 12.1943 44.1504 11.7646C43.9355 11.335 43.8281 10.8337 43.8281 10.2607C43.8281 9.36882 44.0609 8.67546 44.5264 8.18066C44.9919 7.68587 45.6462 7.43848 46.4893 7.43848C47.0133 7.43848 47.4756 7.55241 47.876 7.78027C48.2764 8.00814 48.584 8.33529 48.7988 8.76172C49.0137 9.18815 49.1211 9.68783 49.1211 10.2607ZM52.0801 13.0977C51.4388 13.0977 50.9342 12.8486 50.5664 12.3506C50.2018 11.8525 50.0195 11.1624 50.0195 10.2803C50.0195 9.38509 50.2051 8.68848 50.5762 8.19043C50.9505 7.68913 51.4648 7.43848 52.1191 7.43848C52.806 7.43848 53.3301 7.7054 53.6914 8.23926H53.7402C53.6654 7.83236 53.6279 7.4694 53.6279 7.15039V5.40234H55.1221V13H53.9795L53.6914 12.292H53.6279C53.2894 12.8291 52.7734 13.0977 52.0801 13.0977ZM52.6025 11.9111C52.9834 11.9111 53.2617 11.8005 53.4375 11.5791C53.6165 11.3577 53.7142 10.9818 53.7305 10.4512V10.29C53.7305 9.7041 53.6393 9.28418 53.457 9.03027C53.278 8.77637 52.985 8.64941 52.5781 8.64941C52.2461 8.64941 51.9873 8.79102 51.8018 9.07422C51.6195 9.35417 51.5283 9.7627 51.5283 10.2998C51.5283 10.8369 51.6211 11.2406 51.8066 11.5107C51.9922 11.7777 52.2575 11.9111 52.6025 11.9111ZM60.5469 13L60.3467 12.3018H60.2686C60.109 12.5557 59.8828 12.7526 59.5898 12.8926C59.2969 13.0293 58.9632 13.0977 58.5889 13.0977C57.9476 13.0977 57.4642 12.9268 57.1387 12.585C56.8132 12.2399 56.6504 11.7451 56.6504 11.1006V7.54102H58.1396V10.7295C58.1396 11.1234 58.2096 11.4196 58.3496 11.6182C58.4896 11.8135 58.7126 11.9111 59.0186 11.9111C59.4352 11.9111 59.7363 11.7728 59.9219 11.4961C60.1074 11.2161 60.2002 10.7539 60.2002 10.1094V7.54102H61.6895V13H60.5469ZM65.4688 13.0977C63.7695 13.0977 62.9199 12.165 62.9199 10.2998C62.9199 9.37207 63.151 8.66406 63.6133 8.17578C64.0755 7.68424 64.738 7.43848 65.6006 7.43848C66.2321 7.43848 66.7985 7.56217 67.2998 7.80957L66.8604 8.96191C66.626 8.86751 66.4079 8.79102 66.2061 8.73242C66.0042 8.67057 65.8024 8.63965 65.6006 8.63965C64.8258 8.63965 64.4385 9.18978 64.4385 10.29C64.4385 11.3577 64.8258 11.8916 65.6006 11.8916C65.887 11.8916 66.1523 11.8542 66.3965 11.7793C66.6406 11.7012 66.8848 11.5807 67.1289 11.418V12.6924C66.888 12.8454 66.6439 12.9512 66.3965 13.0098C66.1523 13.0684 65.8431 13.0977 65.4688 13.0977ZM68.335 6.12988C68.335 5.64486 68.6051 5.40234 69.1455 5.40234C69.6859 5.40234 69.9561 5.64486 69.9561 6.12988C69.9561 6.361 69.8877 6.54167 69.751 6.67188C69.6175 6.79883 69.4157 6.8623 69.1455 6.8623C68.6051 6.8623 68.335 6.61816 68.335 6.12988ZM69.8877 13H68.3984V7.54102H69.8877V13ZM74.502 7.43848C74.7038 7.43848 74.8714 7.45312 75.0049 7.48242L74.8926 8.87891C74.7721 8.84635 74.6257 8.83008 74.4531 8.83008C73.9779 8.83008 73.6068 8.95215 73.3398 9.19629C73.0762 9.44043 72.9443 9.78223 72.9443 10.2217V13H71.4551V7.54102H72.583L72.8027 8.45898H72.876C73.0452 8.15299 73.2731 7.90723 73.5596 7.72168C73.8493 7.53288 74.1634 7.43848 74.502 7.43848Z" fill="black"/>
         </svg>
     </a>

    </div>

    <p class="description">{{$serie-> description}}</p>

    <div class="userelections">
        <span class="icons">
           <svg class="icono" width="17" height="15"  viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.8085 0.228123C16.5532 -0.0760408 16.1392 -0.0760408 15.8838 0.228123L5.28501 12.8539L1.11618 7.88778C0.860877 7.58358 0.446866 7.58358 0.1915 7.88778C-0.0638333 8.19194 -0.0638333 8.68509 0.1915 8.98929L4.82272 14.5062C5.07796 14.8102 5.4921 14.8103 5.7474 14.5062L16.8085 1.32964C17.0638 1.02543 17.0638 0.532286 16.8085 0.228123Z" fill="#FEC61A"/>
        </svg>
            <p class="useractions">Seguir viendo</p>
        </span>

        <span class="icons">
        <svg class="icono" width="19" height="24" viewBox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.4927 5.56581C16.5092 4.5561 15.1596 4 13.6923 4C12.5956 4 11.5912 4.3282 10.7069 4.97541C10.2607 5.3021 9.85645 5.70178 9.5 6.16828C9.14369 5.70192 8.73926 5.3021 8.29293 4.97541C7.40883 4.3282 6.40441 4 5.30766 4C3.84039 4 2.49068 4.5561 1.50713 5.56581C0.535332 6.56372 0 7.92701 0 9.40473C0 10.9257 0.598824 12.3179 1.88446 13.7863C3.03456 15.0998 4.68752 16.4332 6.6017 17.9772C7.25532 18.5044 7.9962 19.1021 8.7655 19.7388C8.96873 19.9072 9.22951 20 9.5 20C9.77035 20 10.0313 19.9072 10.2342 19.739C11.0035 19.1023 11.7448 18.5043 12.3987 17.9767C14.3126 16.433 15.9656 15.0998 17.1157 13.7862C18.4013 12.3179 19 10.9257 19 9.40459C19 7.92701 18.4647 6.56372 17.4927 5.56581Z" fill="#FEC61A"/>
        </svg>
         <p class="useractions">Favoritos</p>

        </span>
        <span class="icons">
        <svg class="icono" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.0219 0H0.469669C0.210251 0 1.15011e-06 0.154921 1.15011e-06 0.346071V13.3074C-0.000549253 13.5671 0.196491 13.805 0.509847 13.9235C0.823387 14.0422 1.20059 14.0216 1.48661 13.8699L6.74579 11.0921L12.005 13.87C12.2914 14.0211 12.6682 14.0417 12.9815 13.9231C13.2947 13.8046 13.4918 13.5669 13.4918 13.3074V0.346071C13.4918 0.154921 13.2813 0 13.0219 0Z" fill="#FEC61A"/>
        </svg>
            <p class="useractions">Ver luego</p>

        </span>
    </div>

    <form method="post" action="{{route('lista.store')}}" enctype="multipart/form-data">
        @csrf
        <input type="text" class="serieinput" name="name" placeholder="Nombre temporada">
        <input type="submit" class="login-button" value="Añadir temporada">
    </form>

    <div class="infomultimedia">

        <div>

            <h2>Reparto</h2>
            <ul>
                @foreach($actoresSerie as $actores)
                    <li>{{$actores[0]->actor}}</li>
                @endforeach
            </ul>
        </div>
        <div id="space">
         <div>
            <h2>Idiomas</h2>
            <p class="datos">Español</p>
         </div>
         <div>
            <h2>Subtitulos</h2>
            <p class="datos">Español</p>
            <p class="datos">Ingles</p>
            <p class="datos">Frances</p>
        </div>
        </div>
        <div>
            <h2>Generos</h2>
            <ul>
             @foreach($generosSerie as $genero)
              <li>{{$genero[0]->name_genre}}</li>
             @endforeach
            </ul>
        </div>
         <div>
        </div>
    </div>
</div>

    <div class="portada">
        <img class="fotocover" src="{{asset('storage/'.$serie->cover)}}">
    </div>






</div>






@endsection
