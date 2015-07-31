<?php include_once("header.html");?>
<?php
    function __autoload($nombre_clase) {
        include 'cp/clases/'.$nombre_clase .'.php';
    }
    $temporal = new slide();
    $listaTemporal = $temporal -> listarslideActivas();
?>

<!--BODY-->

<!--<div id="pagepiling">-->
     
       
        <div id="home" class="parallax " data-background-speed-y="0" data-parallax-align="bottom">
            <div class="background_black"></div>
            <div >
                <svg class="logo-slide" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="960px" height="560px" viewBox="0 0 960 560">
                    <defs>
                        <clipPath id="bLogo">
                            <path d="M391.659,258.727c1.545-1.407,2.318-2.532,2.318-3.374v-7.688c-0.291-1.897-0.995-3.167-2.111-3.81
                                c-0.796-0.459-2.104-0.688-3.924-0.688h-3.098v36.879h1.997v-18.153l0.62-0.298c0.199-0.092,0.428-0.207,0.688-0.344l1.354-0.734
                                l3.396,19.53h1.974l-3.649-20.907L391.659,258.727z M388.538,258.818l-1.698,1.125v-14.986l1.147,0.046
                                c2.463,0.123,3.779,0.941,3.947,2.456v0.138v7.757C391.934,256.179,390.802,257.334,388.538,258.818z"/>
                            <path d="M354.293,243.167h-2.685h-1.951v36.856h4.636c1.27,0,2.348-0.428,3.236-1.285c0.887-0.856,1.331-1.897,1.331-3.121
                                v-14.756c0-1.178-0.429-2.195-1.285-3.052l-0.78-0.78l0.78-0.803c0.856-0.841,1.285-1.851,1.285-3.029v-5.623
                                c0-1.224-0.444-2.264-1.331-3.121C356.641,243.596,355.563,243.167,354.293,243.167z M356.909,260.861v14.756
                                c0,0.719-0.252,1.331-0.757,1.836c-0.521,0.505-1.14,0.757-1.859,0.757h-2.685v-19.92l2.685-0.023
                                c0.719,0,1.338,0.252,1.859,0.757C356.657,259.53,356.909,260.142,356.909,260.861z M356.909,253.196
                                c0,0.704-0.252,1.308-0.757,1.813c-0.521,0.521-1.14,0.78-1.859,0.78l-2.685-0.023V244.98h2.685c0.719,0,1.338,0.252,1.859,0.757
                                c0.505,0.505,0.757,1.117,0.757,1.836V253.196z"/>
                            <path d="M460.653,243.259c-1.408,0-2.609,0.429-3.603,1.285c-0.995,0.857-1.492,1.897-1.492,3.121v27.929
                                c0,1.224,0.497,2.265,1.492,3.121c0.994,0.857,2.195,1.285,3.603,1.285c1.407,0,2.608-0.428,3.603-1.285
                                c0.994-0.856,1.492-1.897,1.492-3.121V257.51h-4.819v1.606h2.616v16.478c0,0.704-0.283,1.308-0.849,1.813
                                c-0.566,0.505-1.247,0.757-2.042,0.757c-0.796,0-1.477-0.252-2.042-0.757c-0.566-0.505-0.849-1.109-0.849-1.813v-27.929
                                c0-0.704,0.283-1.308,0.849-1.813c0.566-0.505,1.247-0.757,2.042-0.757c0.795,0,1.476,0.252,2.042,0.757
                                c0.566,0.505,0.849,1.109,0.849,1.813v2.295h2.203v-2.295c0-1.224-0.498-2.264-1.492-3.121
                                C463.261,243.688,462.06,243.259,460.653,243.259z"/>
                            <path d="M569.422,258.727c1.545-1.407,2.318-2.532,2.318-3.374v-7.688c-0.291-1.897-0.994-3.167-2.111-3.81
                                c-0.795-0.459-2.104-0.688-3.924-0.688h-3.098v36.879h1.996v-18.153l0.619-0.298c0.199-0.092,0.428-0.207,0.689-0.344
                                l1.354-0.734l3.396,19.53h1.973l-3.648-20.907L569.422,258.727z M566.301,258.818l-1.697,1.125v-14.986l1.146,0.046
                                c2.463,0.123,3.779,0.941,3.947,2.456v0.138v7.757C569.697,256.179,568.564,257.334,566.301,258.818z"/>
                            <polygon points="597.883,243.098 597.883,245.187 601.418,245.187 601.418,279.978 603.414,279.978 603.414,245.187 
                                606.949,245.187 606.949,243.098             "/>
                            <path d="M422.897,243.19L419.661,280h1.928l0.528-5.944h5.944l0.528,5.944h1.928l-3.236-36.811H422.897z M422.346,271.899
                                l2.501-27.493h0.505l2.479,27.493H422.346z"/>
                            <path d="M496.895,243.259c-1.408,0-2.609,0.429-3.604,1.285c-0.994,0.857-1.492,1.897-1.492,3.121v27.929
                                c0,1.224,0.498,2.265,1.492,3.121c0.994,0.857,2.195,1.285,3.604,1.285c1.406,0,2.607-0.428,3.602-1.285
                                c0.994-0.856,1.492-1.897,1.492-3.121V257.51h-4.818v1.606h2.615v16.478c0,0.704-0.283,1.308-0.85,1.813
                                s-1.246,0.757-2.041,0.757c-0.797,0-1.477-0.252-2.043-0.757s-0.85-1.109-0.85-1.813v-27.929c0-0.704,0.283-1.308,0.85-1.813
                                s1.246-0.757,2.043-0.757c0.795,0,1.475,0.252,2.041,0.757s0.85,1.109,0.85,1.813v2.295h2.203v-2.295
                                c0-1.224-0.498-2.264-1.492-3.121C499.502,243.688,498.301,243.259,496.895,243.259z"/>
                            <path d="M529.9,243.19L526.664,280h1.928l0.527-5.944h5.945l0.527,5.944h1.928l-3.236-36.811H529.9z M529.35,271.899
                                l2.502-27.493h0.504l2.479,27.493H529.35z"/>             
                                <!--MADE FOR ME -->
                                <path d="M455.424,302.252h-2.012V311h2.063c2.312,0,3.148-1.975,3.148-4.374S457.786,302.252,455.424,302.252z M455.475,309.9
                                h-0.913v-6.549h0.862c1.438,0,2.037,1.35,2.037,3.274S456.861,309.9,455.475,309.9z"/>
                            <path d="M438.637,305.301c-0.15,0.288-0.363,0.713-0.363,0.713h-0.024c0,0-0.2-0.425-0.351-0.699l-1.624-3.063h-1.249V311h1.1
                                v-5.936c0-0.351-0.014-0.787-0.014-0.787h0.025c0,0,0.2,0.399,0.35,0.687l1.725,3.161h0.101l1.763-3.174
                                c0.162-0.287,0.324-0.662,0.324-0.662h0.025c0,0-0.013,0.412-0.013,0.775V311h1.112v-8.748h-1.263L438.637,305.301z"/>
                            <path d="M446.85,302.252L444.574,311h1.213l0.438-1.787h2.475l0.449,1.787h1.213l-2.275-8.748H446.85z M446.462,308.176
                                l0.812-3.299c0.088-0.338,0.188-0.863,0.188-0.863h0.025c0,0,0.088,0.525,0.176,0.863l0.812,3.299H446.462z"/>
                            <path d="M496.522,305.214c0-1.624-0.862-2.962-2.812-2.962h-2.237V311h1.15v-2.799h0.949c0.175,0,0.351,0,0.513-0.038
                                l1.237,2.837h1.237l-1.4-3.199C496.085,307.301,496.522,306.326,496.522,305.214z M493.599,307.102h-0.975v-3.75h0.975
                                c1.188,0,1.774,0.725,1.774,1.875C495.373,306.352,494.786,307.102,493.599,307.102z"/>
                            <polygon points="519.859,303.364 519.859,302.252 515.436,302.252 515.436,311 519.859,311 519.859,309.9 516.586,309.9 
                                516.586,307.477 519.372,307.477 519.372,306.376 516.586,306.376 516.586,303.364             "/>
                            <path d="M508.724,305.301c-0.15,0.288-0.362,0.713-0.362,0.713h-0.025c0,0-0.2-0.425-0.35-0.699l-1.625-3.063h-1.25V311h1.1
                                v-5.936c0-0.351-0.012-0.787-0.012-0.787h0.024c0,0,0.2,0.399,0.351,0.687l1.725,3.161h0.1l1.762-3.174
                                c0.163-0.287,0.325-0.662,0.325-0.662h0.025c0,0-0.013,0.412-0.013,0.775V311h1.112v-8.748h-1.263L508.724,305.301z"/>
                            <path d="M485.211,302.127c-2.137,0-2.899,2.025-2.899,4.499c0,2.475,0.763,4.499,2.899,4.499c2.149,0,2.912-2.024,2.912-4.499
                                C488.123,304.152,487.36,302.127,485.211,302.127z M485.211,310.025c-1.225,0-1.75-1.35-1.75-3.399s0.513-3.399,1.75-3.399
                                c1.25,0,1.762,1.35,1.762,3.399S486.448,310.025,485.211,310.025z"/>
                            <polygon points="462.036,311 466.46,311 466.46,309.9 463.187,309.9 463.187,307.477 465.973,307.477 465.973,306.376 
                                463.187,306.376 463.187,303.364 466.46,303.364 466.46,302.252 462.036,302.252           "/>
                            <polygon points="475.174,311 476.324,311 476.324,307.838 479.099,307.838 479.099,306.738 476.324,306.738 476.324,303.364 
                                479.598,303.364 479.598,302.252 475.174,302.252             "/>
                        </clipPath>
                    </defs>
                    <!--BRAGGART -->
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" enable-background="new    " d="
                    M425.732,240.809c1.211,13.838,2.423,27.676,3.549,40.526"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" enable-background="new    " d="
                        M420.191,281.324c1.293-13.832,2.586-27.662,3.786-40.506"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" enable-background="new    " d="
                        M422.334,273.217c1.852,0,4.32,0,6.173,0"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" enable-background="new    " d="
                        M532.822,240.809c1.211,13.838,2.423,27.676,3.549,40.525"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3.5" stroke-miterlimit="10" enable-background="new    " d="
                        M527.281,281.323c1.293-13.831,2.586-27.662,3.786-40.505"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" enable-background="new    " d="
                        M529.424,273.216c1.852,0,4.32,0,6.173,0"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" d="M349.412,243.5
                        c1.87,0.172,4.052-0.172,5.818,0.602c2.702,1.288,2.078,3.436,2.078,5.67c0,1.461,0.731,4.289-0.308,5.406
                        c-1.144,1.204-4.368,0.61-6.03,0.523"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" d="M349.615,256.736
                        c2.027,0.303,4.394-0.305,6.309,1.066c2.93,2.283,2.254,6.092,2.254,10.051c0,2.59,0.449,8.312-1.178,9.907
                        c-2.333,2.286-6.164,1.497-8.083,1.333"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" enable-background="new    " d="
                        M350.333,242.578c0,12.443,0,24.886,0,37.328"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" enable-background="new    " d="
                        M385.917,242.408c0,12.442,0,25.66,0,38.102"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" d="M386.5,243.938
                        c1.878,0,5.066-0.102,5.809,1.835c0.262,0.716,0.306,1.853,0.393,2.651c0.087,1.01,0.131,2.021,0.131,3.03
                        c0,0.884,0.043,1.769,0,2.61c-0.087,1.136-0.34,2.199-1.083,2.998c-0.743,0.8-1.502,1.452-2.375,2.125
                        c-0.743,0.549-2.001,1.163-2.875,1.5"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" enable-background="new    " d="
                        M563.916,242.408c0,12.76,0,25.52,0,38.279"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" enable-background="new    " d="
                        M602.501,245c0,15.741,0,27.653,0,35.734"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" enable-background="new    " d="
                        M598.674,243.666c-2.458,0,1.363,0,9.184,0"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" d="M464.5,250.25
                        c0.656-3.333-1.125-7.152-5.5-5.625c-3.475,1.212-2.06,5.375-2.06,8.375c0,4.667-0.656,9.334-0.328,14
                        c0,2.667-0.675,8.104,0.638,10.438c0.528,1.181,6.006,3.05,7.625-1.063c0.319-0.703-0.028-19.646-0.028-18.252
                        c-0.656,0.334-3.362-0.02-4.347,0.314"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" d="M564.5,243.938
                        c1.878,0,5.066-0.102,5.809,1.835c0.262,0.716,0.306,1.853,0.393,2.651c0.088,1.01,0.131,2.021,0.131,3.03
                        c0,0.884,0.044,1.769,0,2.61c-0.087,1.136-0.34,2.199-1.082,2.998c-0.742,0.8-1.502,1.452-2.375,2.125
                        c-0.742,0.549-2.002,1.163-2.875,1.5"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" enable-background="new    " d="
                        M568.213,259.17c1.22,7.348,2.438,14.695,3.57,21.518"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" enable-background="new    " d="
                        M390.39,259.403c1.216,7.338,2.431,14.676,3.561,21.491"/>
                    <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" d="M500.5,250.25
                        c0.656-3.333-1.125-7.152-5.5-5.625c-3.475,1.212-2.06,5.375-2.06,8.375c0,4.667-0.656,9.334-0.328,14
                        c0,2.667-0.092,7.688,0.638,10.438c0.332,1.25,6.006,3.05,7.625-1.063c0.319-0.703-0.028-19.646-0.028-18.252
                        c-0.656,0.334-3.362-0.02-4.347,0.314"/>
                        <!-- Made for me-->
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.2" stroke-miterlimit="50" d="M435.565,302.252
                            c-0.031,2.625-0.031,5.687-0.031,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.2" stroke-miterlimit="50" d="M440.966,302.252
                            c-0.031,2.625-0.031,5.687-0.031,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.4" stroke-miterlimit="50" d="M435.357,301.866
                            c0.937,1.863,2.062,4.02,3.187,6.175"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="50" d="M437.708,308.057
                            c0.918-1.872,2.022-4.04,3.125-6.206"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.16" stroke-miterlimit="50" d="M445.162,311.143
                            c0.649-2.756,1.456-5.961,2.26-9.165"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.19" stroke-miterlimit="50" d="M447.53,301.977
                            c0.7,2.743,1.469,5.957,2.239,9.17"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.5854" stroke-miterlimit="50" d="M446.146,308.727
                            c0.775-0.008,1.679-0.004,2.583,0"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.2" stroke-miterlimit="50" d="M454.016,302.252
                            c-0.031,2.625-0.031,5.687-0.031,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.21" stroke-miterlimit="50" d="M462.616,302.252
                            c-0.031,2.625-0.031,5.687-0.031,8.748"/>
                        <path clip-path="url(#bLogo)"  fill="none" stroke="#ffffff" stroke-width="2" stroke-miterlimit="50" d="M454.504,302.792
                            c0.646-0.044,1.355,0.08,1.954,0.256c0.76,0.194,0.974,0.62,1.25,1.229c0.415,0.89,0.536,2.166,0.349,3.104
                            c-0.093,0.465-0.503,2.272-0.768,2.444c-1.203,0.803-1.075,0.702-2.831,0.702"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.3" stroke-miterlimit="50" d="M463.146,302.727
                            c1.044-0.011,2.262-0.005,3.479,0"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.2" stroke-miterlimit="50" d="M463.146,306.983
                            c1.044-0.012,2.262-0.006,3.479,0"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.2" stroke-miterlimit="50" d="M463.146,310.483
                            c1.044-0.012,2.262-0.006,3.479,0"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.21" stroke-miterlimit="50" d="M475.775,302.252
                            c-0.031,2.625-0.031,5.687-0.031,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.3" stroke-miterlimit="50" d="M476.146,302.727
                            c1.044-0.011,2.262-0.005,3.479,0"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.22" stroke-miterlimit="50" d="M476.146,307.253
                            c0.886-0.012,1.92-0.01,2.953-0.007"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="2" stroke-miterlimit="50" d="M485.229,302.715
                            c-1.188-0.063-1.896,1.541-2.104,2.479c-0.188,0.938-0.146,1.896-0.146,2.854c0,0.521,0.042,0.771,0.271,1.188
                            c0.292,0.604,0.646,0.958,1.292,1.188c1.188,0.417,2.104-0.188,2.708-1.229c0.125-0.25,0.084-0.479,0.146-0.729
                            c0.063-0.271,0.188-0.563,0.271-0.834c0.188-0.604,0.021-1.188-0.104-1.791c-0.063-0.313-0.25-0.563-0.354-0.875
                            c-0.104-0.334-0.271-0.604-0.438-0.896c-0.375-0.563-0.542-1.021-1.229-1.271c-0.146-0.042-0.208-0.125-0.396-0.104"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.24" stroke-miterlimit="50" d="M492.046,302.252
                            c-0.031,2.625-0.031,5.687-0.031,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.3" stroke-miterlimit="50" d="M492.609,302.756
                            c0.813,0,2.412,0.084,2.891,0.813c0.292,0.396,0.406,0.994,0.469,1.494c0.063,0.521-0.052,1.152-0.344,1.59
                            c-0.333,0.479-0.75,0.666-1.333,0.833c-0.5,0.125-1.245,0.232-1.745,0.211"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.4" stroke-miterlimit="50" d="M494.654,307.844
                            c-0.016,0.203,0.189,0.781,0.236,0.984c0.078,0.281,0.203,0.484,0.344,0.734c0.234,0.422,0.75,1.359,0.891,1.828"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.2" stroke-miterlimit="50" d="M505.654,302.252
                            c-0.031,2.625-0.031,5.687-0.031,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.2" stroke-miterlimit="50" d="M511.055,302.252
                            c-0.031,2.625-0.031,5.687-0.031,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.4" stroke-miterlimit="50" d="M505.445,301.866
                            c0.938,1.863,2.063,4.02,3.188,6.175"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="50" d="M507.795,308.057
                            c0.92-1.872,2.023-4.04,3.125-6.206"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.21" stroke-miterlimit="50" d="M516.011,302.252
                            c-0.031,2.625-0.031,5.687-0.031,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.3" stroke-miterlimit="50" d="M516.542,302.727
                            c1.043-0.011,2.262-0.005,3.479,0"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.2" stroke-miterlimit="50" d="M516.541,306.983
                            c1.044-0.012,2.262-0.006,3.479,0"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#ffffff" stroke-width="1.2" stroke-miterlimit="50" d="M516.541,310.483
                            c1.044-0.012,2.262-0.006,3.479,0"/>
                        
                      <!--Hexagono -->
                    <path fill="none" stroke="#ffffff" stroke-width="6" stroke-miterlimit="50" d="M300,219v73"/>
                    <path fill="none" stroke="#ffffff" stroke-width="6" stroke-miterlimit="10" d="M475,348l181.167-58.831"/>
                    <path fill="none" stroke="#ffffff" stroke-width="6.1169" stroke-miterlimit="10" d="M297.5,221.75l179-56.5"/>
                    <path fill="none" stroke="#ffffff" stroke-width="6" stroke-linejoin="bevel" stroke-miterlimit="10" d="M477,347.75l-179-58.5"/>
                    <path fill="none" stroke="#ffffff" stroke-width="6" stroke-linejoin="bevel" stroke-miterlimit="10" d="M475,165l180.833,57.171"/>
                    <path fill="none" stroke="#ffffff" stroke-width="6" stroke-miterlimit="50" d="M654,219v73"/>
                        <!--Diamantito -->
                       <path fill="none" stroke="#ffffff" stroke-width="6" stroke-miterlimit="10" d="M477,347.5L300,290v-69l176.5-56L654,221.5V290
                    L477,347.5z"/>
                    <path fill="none" stroke="#ffffff" stroke-width="3" stroke-miterlimit="10" d="M376,291.5h204"/>
                    <path fill="none" stroke="#ffffff" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M476.713,188.887v35.75
                        "/>
                    <path fill="none" stroke="#ffffff" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M494.717,214.919
                        l-17.938-25.905"/>
                    <path fill="none" stroke="#ffffff" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M476.713,188.887
                        l-17.429,26.562"/>
                    <path fill="none" stroke="#ffffff" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M459.285,215.449
                        l17.429,9.188"/>
                    <path fill="none" stroke="#ffffff" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M476.713,224.637
                        l18.003-9.718"/>
                    <path fill="none" stroke="#ffffff" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M459.285,215.449
                        v-17.35"/>
                    <path fill="none" stroke="#ffffff" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M459.285,198.099
                        l17.429,8.396"/>
                    <path fill="none" stroke="#ffffff" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M476.713,206.496
                        l18.003-8.523"/>
                    <path fill="none" stroke="#ffffff" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M476.713,206.496
                        l-17.429,8.954"/>
                    <path fill="none" stroke="#ffffff" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M459.285,198.099
                        l17.429,26.538"/>
                    <path fill="none" stroke="#ffffff" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M476.713,224.637
                        l18.003-26.665"/>
                    <path fill="none" stroke="#ffffff" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M494.717,214.919
                        l-18.003-8.423"/>
                    <path fill="none" stroke="#ffffff" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M494.717,197.972
                        v16.947"/>
                </svg>

            </div>
            <div id="full-width-slider" class="royalSlider heroSlider rsMinW" style="width:100%;">
            <?php 
                foreach($listaTemporal as $elementoTemporal){
                    echo '<div class="rsContent">
                            <img class="rsImg" src="slide/'.$elementoTemporal["ruta"].'" alt=""/>
                          </div>';
                            }
            ?>  
            </div>
        </div>
        

        <div id="us" class="parallax " data-background-speed-y="0" data-parallax-align="top">
            <div class="background_black"></div>
            <a style="display:block;" href="store.php">
                <svg  class="frontLetters" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="792px" height="612px" viewBox="0 0 792 612">
                    <defs>
                        <clipPath id="myClip">
                            <polygon points="349.369,261.176 359.52,261.176 359.52,361.107 365.255,361.107 365.255,261.176 375.406,261.176 
                                375.406,255.177 349.369,255.177             "/>
                            <polygon points="265.521,255.441 259.852,255.441 259.852,361.701 281.407,361.701 281.407,355.768 265.521,355.768            "/>
                            <path d="M292.745,255.441l-9.294,105.733h5.537l1.516-17.073h17.073l1.516,17.073h5.537l-9.294-105.733H292.745z
                                 M291.163,337.904l7.185-78.97h1.45l7.119,78.97H291.163z"/>
                            <polygon points="393.797,361.174 417.462,361.174 417.462,355.307 399.994,355.307 399.994,301.847 417.462,301.847 
                                417.462,297.431 399.994,297.431 399.994,261.439 417.462,261.439 417.462,255.639 393.797,255.639             "/>
                            <path d="M526.489,255.441h-12.59l-9.295,105.733h5.537l1.517-17.073h17.073l1.516,17.073h5.537L526.489,255.441z
                                 M512.317,337.904l7.186-78.97h1.449l7.119,78.97H512.317z"/>
                            <path d="M495.641,259.33c-2.9-2.46-6.417-3.691-10.547-3.691h-9.953h-6.461v105.535h16.414c4.13,0,7.646-1.23,10.547-3.691
                                s4.351-5.449,4.351-8.965v-80.223C499.991,264.78,498.541,261.792,495.641,259.33z M493.466,348.518
                                c0,2.021-0.814,3.757-2.439,5.207c-1.626,1.45-3.604,2.176-5.933,2.176c-0.659,0-2.834-0.021-6.525-0.066h-3.428v-94.856h3.428
                                c3.251-0.043,5.427-0.066,6.525-0.066c2.329,0,4.307,0.725,5.933,2.175c1.625,1.45,2.439,3.187,2.439,5.208V348.518z"/>
                            <polygon points="454.441,354.647 435.721,255.375 425.899,255.375 425.899,361.371 431.305,361.371 431.305,259.396 
                                450.948,361.371 454.441,361.371 460.045,361.371 460.045,255.375 454.441,255.375             "/>
                            <rect x="380.416" y="255.639" width="5.735" height="105.535"/>
                        </clipPath>
                    </defs>
                        <!-- L --><path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="9" d="M262.368,255.333c0,31,0,62,0,92.667
                        c0,3-1.136,9.334,1.135,11c3.027,2.334,13.624,0,18.165,0"/>
                        <!-- A --><path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="8"   d="M285.291,362.968
                            c3.445-36.89,6.891-73.777,10.09-108.029"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="7"   d="M291,257.095
                            c4.935,0,11.513,0,16.447,0"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="7"   d="M302.719,253.91
                        c3.229,36.908,6.458,73.815,9.457,108.087"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="7"   d="M291,341.345
                            c4.935,0,11.513,0,16.447,0"/>
                        <!-- T --><path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="7" d="M362.333,261
                        c0,30.88,0,62.101,1,93.32c0,2.375,0,4.751,0,6.787"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="7" d="M347.667,258.05
                        c9.247,0,18.493-0.334,27.739-0.334"/>
                        <!-- I --><path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="7" d="M382.637,255.333
                        c0,32.628,0,65.616,1,98.603c0,2.509,0,5.021,0,7.171"/>
                        <!-- E --><<path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="7"   d="M396.75,255.639
                        c0,36.014,0,72.027,0,105.469"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="7.2"   d="M399.337,258.217
                            c6.042,0,12.083-0.334,18.125-0.334"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="6" d="M400.343,299.147
                            c5.707,0,11.412-0.334,17.119-0.334"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="7" d="M399.344,358.75
                        c6.187,0,12.374,0,18.119,0"/>
                        <!--N--> <path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="7" d="M429.089,361.883
                        c0-33.484,0-67.337-1-101.189c0-2.575,0-5.152,0-7.359"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="7" d="M432.232,255.158
                        c7.069,36.368,14.139,72.736,20.703,106.506"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="7" d="M458.089,361.883
                        c0-33.484,0-67.337-1-101.189c0-2.575,0-5.152,0-7.359"/>
                        <!--D--><path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="7" d="M471.75,255.639
                        c0,35.179,0,70.357,0,105.535"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="10"  d="M472.859,258.12
                        c6.295,0,12.874-1.756,18.311,2.259c6.58,4.517,5.436,11.793,5.722,18.569c0.285,8.532,0.571,17.063,0.571,25.595
                        c0,9.787,0.287,19.573,0.287,29.61c0,12.045,0.571,21.831-14.306,25.595c-2.574,0.753-7.724,1.004-10.299,0"/>
                        <!--A--><path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="8" d="M506.248,362.623
                        c3.445-36.89,6.891-73.777,10.09-108.029"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="7" d="M511.957,256.75
                        c4.935,0,11.513,0,16.447,0"/>
                        <path clip-path="url(#myClip)" stroke="#ffffff" stroke-width="7" d="M523.676,253.565
                        c3.229,36.908,6.458,73.815,9.457,108.087"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#ffffff" stroke-width="7" d="M511.957,341
                        c4.935,0,11.513,0,16.447,0"/>                       
                </svg>
                <svg  class="shadow" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="792px" height="612px" viewBox="0 0 792 612">
                    <defs>
                        <clipPath id="myClip">
                            <polygon points="349.369,261.176 359.52,261.176 359.52,361.107 365.255,361.107 365.255,261.176 375.406,261.176 
                                375.406,255.177 349.369,255.177             "/>
                            <polygon points="265.521,255.441 259.852,255.441 259.852,361.701 281.407,361.701 281.407,355.768 265.521,355.768            "/>
                            <path d="M292.745,255.441l-9.294,105.733h5.537l1.516-17.073h17.073l1.516,17.073h5.537l-9.294-105.733H292.745z
                                 M291.163,337.904l7.185-78.97h1.45l7.119,78.97H291.163z"/>
                            <polygon points="393.797,361.174 417.462,361.174 417.462,355.307 399.994,355.307 399.994,301.847 417.462,301.847 
                                417.462,297.431 399.994,297.431 399.994,261.439 417.462,261.439 417.462,255.639 393.797,255.639             "/>
                            <path d="M526.489,255.441h-12.59l-9.295,105.733h5.537l1.517-17.073h17.073l1.516,17.073h5.537L526.489,255.441z
                                 M512.317,337.904l7.186-78.97h1.449l7.119,78.97H512.317z"/>
                            <path d="M495.641,259.33c-2.9-2.46-6.417-3.691-10.547-3.691h-9.953h-6.461v105.535h16.414c4.13,0,7.646-1.23,10.547-3.691
                                s4.351-5.449,4.351-8.965v-80.223C499.991,264.78,498.541,261.792,495.641,259.33z M493.466,348.518
                                c0,2.021-0.814,3.757-2.439,5.207c-1.626,1.45-3.604,2.176-5.933,2.176c-0.659,0-2.834-0.021-6.525-0.066h-3.428v-94.856h3.428
                                c3.251-0.043,5.427-0.066,6.525-0.066c2.329,0,4.307,0.725,5.933,2.175c1.625,1.45,2.439,3.187,2.439,5.208V348.518z"/>
                            <polygon points="454.441,354.647 435.721,255.375 425.899,255.375 425.899,361.371 431.305,361.371 431.305,259.396 
                                450.948,361.371 454.441,361.371 460.045,361.371 460.045,255.375 454.441,255.375             "/>
                            <rect x="380.416" y="255.639" width="5.735" height="105.535"/>
                        </clipPath>
                    </defs>
                        <!-- L --><path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="9" d="M262.368,255.333c0,31,0,62,0,92.667
                        c0,3-1.136,9.334,1.135,11c3.027,2.334,13.624,0,18.165,0"/>
                        <!-- A --><path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="8"   d="M285.291,362.968
                            c3.445-36.89,6.891-73.777,10.09-108.029"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="7"   d="M291,257.095
                            c4.935,0,11.513,0,16.447,0"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="7"   d="M302.719,253.91
                        c3.229,36.908,6.458,73.815,9.457,108.087"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="7"   d="M291,341.345
                            c4.935,0,11.513,0,16.447,0"/>
                        <!-- T --><path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="7" d="M362.333,261
                        c0,30.88,0,62.101,1,93.32c0,2.375,0,4.751,0,6.787"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="7" d="M347.667,258.05
                        c9.247,0,18.493-0.334,27.739-0.334"/>
                        <!-- I --><path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="7" d="M382.637,255.333
                        c0,32.628,0,65.616,1,98.603c0,2.509,0,5.021,0,7.171"/>
                        <!-- E --><<path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="7"   d="M396.75,255.639
                        c0,36.014,0,72.027,0,105.469"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="7.2"   d="M399.337,258.217
                            c6.042,0,12.083-0.334,18.125-0.334"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="6" d="M400.343,299.147
                            c5.707,0,11.412-0.334,17.119-0.334"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="7" d="M399.344,358.75
                        c6.187,0,12.374,0,18.119,0"/>
                        <!--N--> <path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="7" d="M429.089,361.883
                        c0-33.484,0-67.337-1-101.189c0-2.575,0-5.152,0-7.359"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="7" d="M432.232,255.158
                        c7.069,36.368,14.139,72.736,20.703,106.506"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="7" d="M458.089,361.883
                        c0-33.484,0-67.337-1-101.189c0-2.575,0-5.152,0-7.359"/>
                        <!--D--><path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="7" d="M471.75,255.639
                        c0,35.179,0,70.357,0,105.535"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="10"  d="M472.859,258.12
                        c6.295,0,12.874-1.756,18.311,2.259c6.58,4.517,5.436,11.793,5.722,18.569c0.285,8.532,0.571,17.063,0.571,25.595
                        c0,9.787,0.287,19.573,0.287,29.61c0,12.045,0.571,21.831-14.306,25.595c-2.574,0.753-7.724,1.004-10.299,0"/>
                        <!--A--><path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="8" d="M506.248,362.623
                        c3.445-36.89,6.891-73.777,10.09-108.029"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="7" d="M511.957,256.75
                        c4.935,0,11.513,0,16.447,0"/>
                        <path clip-path="url(#myClip)" stroke="#000000" stroke-width="7" d="M523.676,253.565
                        c3.229,36.908,6.458,73.815,9.457,108.087"/>
                        <path clip-path="url(#myClip)" fill="none" stroke="#000000" stroke-width="7" d="M511.957,341
                        c4.935,0,11.513,0,16.447,0"/>                       
                </svg>
            </a>   
        </div>

        <div id="shirts" class="parallax" data-background-speed-y="0" data-parallax-align="top">
            <div class="background_black"></div>
            <a style="display:block;" href="shirts.php">
                <svg  class="frontLetters" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="792px" height="612px" viewBox="0 0 792 612">
                    <defs>
                        <clipPath id="camisas">
                            <path d="M303.598,239.919l-9.432,107.299h5.619l1.539-17.326h17.326l1.539,17.326h5.619l-9.432-107.299H303.598z
                                 M301.992,323.604l7.292-80.14h1.472l7.225,80.14H301.992z"/>
                            <path d="M277.643,238.515c-3.88,0-7.181,1.294-9.9,3.88c-2.766,2.587-4.147,5.709-4.147,9.365v83.484
                                c0,3.612,1.382,6.713,4.147,9.299c2.72,2.586,6.021,3.879,9.9,3.879s7.202-1.293,9.967-3.879
                                c2.765-2.586,4.147-5.687,4.147-9.299v-6.957h-6.087v7.961c0,2.096-0.781,3.902-2.341,5.418
                                c-1.562,1.472-3.457,2.207-5.686,2.207c-2.186,0-4.059-0.735-5.619-2.207c-1.562-1.516-2.341-3.322-2.341-5.418v-84.89
                                c0-2.096,0.78-3.902,2.341-5.418c1.561-1.472,3.434-2.208,5.619-2.208c2.229,0,4.125,0.736,5.686,2.208
                                c1.561,1.517,2.341,3.323,2.341,5.418v7.292h6.087v-6.89c0-3.656-1.383-6.778-4.147-9.365
                                C284.844,239.809,281.522,238.515,277.643,238.515z"/>
                            <polygon points="355.642,336.716 341.393,239.919 331.426,239.919 331.426,347.754 336.978,347.754 336.978,243.666 
                                352.364,347.754 358.853,347.754 374.238,243.666 374.238,347.754 379.791,347.754 379.791,239.919 369.823,239.919             "/>
                            <path d="M414.775,239.652c-4.146,0-7.67,1.361-10.568,4.081c-2.943,2.721-4.415,5.999-4.415,9.833v21.607l24.349,17.058
                                l-0.201,42.344c0,2.186-0.893,4.059-2.676,5.619c-1.783,1.562-3.945,2.341-6.488,2.341c-2.541,0-4.705-0.779-6.488-2.341
                                c-1.785-1.561-2.676-3.434-2.676-5.619v-24.617h-5.819v24.617c0,3.836,1.472,7.114,4.415,9.833
                                c2.898,2.721,6.422,4.081,10.568,4.081c4.104,0,7.627-1.36,10.57-4.081c2.943-2.719,4.414-5.997,4.414-9.833v-45.421
                                l-24.283-16.924l0.135-18.664c0-2.185,0.891-4.058,2.676-5.619c1.783-1.561,3.947-2.341,6.488-2.341
                                c2.543,0,4.705,0.781,6.488,2.341c1.783,1.562,2.676,3.435,2.676,5.619v15.051h5.82v-15.051c0-3.835-1.471-7.113-4.414-9.833
                                C422.402,241.013,418.879,239.652,414.775,239.652z"/>
                            <rect x="387.417" y="240.12" width="5.82" height="107.099"/>
                            <path d="M497.324,268.617v-15.051c0-3.835-1.471-7.113-4.414-9.833c-2.943-2.72-6.467-4.081-10.57-4.081
                                c-4.146,0-7.67,1.361-10.568,4.081c-2.943,2.721-4.416,5.999-4.416,9.833v21.607l24.35,17.058l-0.201,42.344
                                c0,2.186-0.893,4.059-2.676,5.619c-1.783,1.562-3.945,2.341-6.488,2.341c-2.541,0-4.705-0.779-6.488-2.341
                                c-1.785-1.561-2.676-3.434-2.676-5.619v-24.617h-5.82v24.617c0,3.836,1.473,7.114,4.416,9.833
                                c2.898,2.721,6.422,4.081,10.568,4.081c4.104,0,7.627-1.36,10.57-4.081c2.943-2.719,4.414-5.997,4.414-9.833v-45.421
                                l-24.283-16.924l0.135-18.664c0-2.185,0.891-4.058,2.676-5.619c1.783-1.561,3.947-2.341,6.488-2.341
                                c2.543,0,4.705,0.781,6.488,2.341c1.783,1.562,2.676,3.435,2.676,5.619v15.051H497.324z"/>
                            <path d="M441.936,239.919l-9.432,107.299h5.619l1.539-17.326h17.324l1.539,17.326h5.619l-9.432-107.299H441.936z M440.33,323.604
                                l7.291-80.14h1.473l7.225,80.14H440.33z"/>
                        </clipPath>
                    </defs>
                        <!-- C --><path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="10"   d="M288.333,259.182
                        c1-8.955-2-19.829-14.667-16.63c-8.667,2.238-7,12.153-7,18.869c0,12.153-0.333,24.627-1,36.78C265,309.075,265,320.269,265,331.143
                        c0,7.037,6.333,15.672,14.667,12.794c6.667-2.24,9.667-11.194,9.333-16.951"/>
                        <!-- A --><path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="9"  d="M295.691,348.031
                        c3.445-36.89,6.891-73.777,10.09-108.029"/>
                         <path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="9" d="M302.4,242.667
                        c4.935,0,11.513,0,16.447,0"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="8" d="M314.119,239.974
                        c3.229,36.908,6.458,73.815,9.457,108.087"/> 
                        <path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="9" d="M301.403,326.45
                        c5.233,0,12.211,0,17.445,0"/>
                        <!-- M --><path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="7.5" d="M333.333,348.489
                            c0-36.658,0-73.317,0-109.975"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="7" d="M338.127,239.587
                            c5.454,37.235,10.909,74.472,16.362,111.704"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="7.5" d="M354.566,351.291
                            c5.454-37.234,10.908-74.472,16.362-111.703"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="7" d="M377.334,238.974
                            c0,36.505,0,73.012,0,109.516"/>
                        <!-- I --><path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="7" d="M390,240.193
                        c0,35.766,0,71.532,0,107.296"/>
                        <!--S--><path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="8"  d="M426.667,270.219
                        c0-10.361,2-20.008-7.667-26.082c-15-9.646-16,17.507-16.667,27.868"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="8"  d="M399.792,271.671
                        c9.99,7.073,19.979,14.15,29.968,21.225"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="9" d="M426.333,293.334
                        c0,13.666,2,27.666,0.667,41.333c-0.333,4.333-1.333,6.333-5.667,8c-3,1.333-9.666,2.667-12.666,0.667
                        c-6.667-4.667-6-18.667-6-25.667c0-2.667,0-5.333,0-7.667"/>
                        <!-- A --><path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="8" d="M434.51,348.031
                            c3.445-36.89,6.891-73.777,10.09-108.029"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="7" d="M440.219,242.158
                            c4.934,0,11.512,0,16.447,0"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="7" d="M451.938,238.974
                            c3.256,37.237,6.516,74.474,9.541,109.05"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="7" d="M440.219,327.408
                            c4.934,0,11.512,0,16.447,0"/>
                        <!-- S--><path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="11" d="M494.562,269.495
                        c0-10.361,2-20.008-7.667-26.082c-15-9.646-16,17.507-16.667,27.868"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="11" d="M467.687,270.947
                            c9.99,7.073,19.979,14.15,29.968,21.225"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#ffffff" stroke-width="11" d="M494.228,292.61
                            c0,13.666,2,27.666,0.667,41.333c-0.333,4.332-1.333,6.332-5.667,8c-3,1.332-9.666,2.666-12.666,0.666
                            c-6.667-4.666-6-18.666-6-25.666c0-2.668,0-5.334,0-7.668"/>
                </svg>
                <svg  class="shadow" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="792px" height="612px" viewBox="0 0 792 612">
                    <defs>
                        <clipPath id="camisas">
                            <path d="M303.598,239.919l-9.432,107.299h5.619l1.539-17.326h17.326l1.539,17.326h5.619l-9.432-107.299H303.598z
                                 M301.992,323.604l7.292-80.14h1.472l7.225,80.14H301.992z"/>
                            <path d="M277.643,238.515c-3.88,0-7.181,1.294-9.9,3.88c-2.766,2.587-4.147,5.709-4.147,9.365v83.484
                                c0,3.612,1.382,6.713,4.147,9.299c2.72,2.586,6.021,3.879,9.9,3.879s7.202-1.293,9.967-3.879
                                c2.765-2.586,4.147-5.687,4.147-9.299v-6.957h-6.087v7.961c0,2.096-0.781,3.902-2.341,5.418
                                c-1.562,1.472-3.457,2.207-5.686,2.207c-2.186,0-4.059-0.735-5.619-2.207c-1.562-1.516-2.341-3.322-2.341-5.418v-84.89
                                c0-2.096,0.78-3.902,2.341-5.418c1.561-1.472,3.434-2.208,5.619-2.208c2.229,0,4.125,0.736,5.686,2.208
                                c1.561,1.517,2.341,3.323,2.341,5.418v7.292h6.087v-6.89c0-3.656-1.383-6.778-4.147-9.365
                                C284.844,239.809,281.522,238.515,277.643,238.515z"/>
                            <polygon points="355.642,336.716 341.393,239.919 331.426,239.919 331.426,347.754 336.978,347.754 336.978,243.666 
                                352.364,347.754 358.853,347.754 374.238,243.666 374.238,347.754 379.791,347.754 379.791,239.919 369.823,239.919             "/>
                            <path d="M414.775,239.652c-4.146,0-7.67,1.361-10.568,4.081c-2.943,2.721-4.415,5.999-4.415,9.833v21.607l24.349,17.058
                                l-0.201,42.344c0,2.186-0.893,4.059-2.676,5.619c-1.783,1.562-3.945,2.341-6.488,2.341c-2.541,0-4.705-0.779-6.488-2.341
                                c-1.785-1.561-2.676-3.434-2.676-5.619v-24.617h-5.819v24.617c0,3.836,1.472,7.114,4.415,9.833
                                c2.898,2.721,6.422,4.081,10.568,4.081c4.104,0,7.627-1.36,10.57-4.081c2.943-2.719,4.414-5.997,4.414-9.833v-45.421
                                l-24.283-16.924l0.135-18.664c0-2.185,0.891-4.058,2.676-5.619c1.783-1.561,3.947-2.341,6.488-2.341
                                c2.543,0,4.705,0.781,6.488,2.341c1.783,1.562,2.676,3.435,2.676,5.619v15.051h5.82v-15.051c0-3.835-1.471-7.113-4.414-9.833
                                C422.402,241.013,418.879,239.652,414.775,239.652z"/>
                            <rect x="387.417" y="240.12" width="5.82" height="107.099"/>
                            <path d="M497.324,268.617v-15.051c0-3.835-1.471-7.113-4.414-9.833c-2.943-2.72-6.467-4.081-10.57-4.081
                                c-4.146,0-7.67,1.361-10.568,4.081c-2.943,2.721-4.416,5.999-4.416,9.833v21.607l24.35,17.058l-0.201,42.344
                                c0,2.186-0.893,4.059-2.676,5.619c-1.783,1.562-3.945,2.341-6.488,2.341c-2.541,0-4.705-0.779-6.488-2.341
                                c-1.785-1.561-2.676-3.434-2.676-5.619v-24.617h-5.82v24.617c0,3.836,1.473,7.114,4.416,9.833
                                c2.898,2.721,6.422,4.081,10.568,4.081c4.104,0,7.627-1.36,10.57-4.081c2.943-2.719,4.414-5.997,4.414-9.833v-45.421
                                l-24.283-16.924l0.135-18.664c0-2.185,0.891-4.058,2.676-5.619c1.783-1.561,3.947-2.341,6.488-2.341
                                c2.543,0,4.705,0.781,6.488,2.341c1.783,1.562,2.676,3.435,2.676,5.619v15.051H497.324z"/>
                            <path d="M441.936,239.919l-9.432,107.299h5.619l1.539-17.326h17.324l1.539,17.326h5.619l-9.432-107.299H441.936z M440.33,323.604
                                l7.291-80.14h1.473l7.225,80.14H440.33z"/>
                        </clipPath>
                    </defs>
                        <!-- C --><path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="10"   d="M288.333,259.182
                        c1-8.955-2-19.829-14.667-16.63c-8.667,2.238-7,12.153-7,18.869c0,12.153-0.333,24.627-1,36.78C265,309.075,265,320.269,265,331.143
                        c0,7.037,6.333,15.672,14.667,12.794c6.667-2.24,9.667-11.194,9.333-16.951"/>
                        <!-- A --><path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="9"  d="M295.691,348.031
                        c3.445-36.89,6.891-73.777,10.09-108.029"/>
                         <path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="9" d="M302.4,242.667
                        c4.935,0,11.513,0,16.447,0"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="8" d="M314.119,239.974
                        c3.229,36.908,6.458,73.815,9.457,108.087"/> 
                        <path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="9" d="M301.403,326.45
                        c5.233,0,12.211,0,17.445,0"/>
                        <!-- M --><path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="7.5" d="M333.333,348.489
                            c0-36.658,0-73.317,0-109.975"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="7" d="M338.127,239.587
                            c5.454,37.235,10.909,74.472,16.362,111.704"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="7.5" d="M354.566,351.291
                            c5.454-37.234,10.908-74.472,16.362-111.703"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="7" d="M377.334,238.974
                            c0,36.505,0,73.012,0,109.516"/>
                        <!-- I --><path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="7" d="M390,240.193
                        c0,35.766,0,71.532,0,107.296"/>
                        <!--S--><path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="8"  d="M426.667,270.219
                        c0-10.361,2-20.008-7.667-26.082c-15-9.646-16,17.507-16.667,27.868"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="8"  d="M399.792,271.671
                        c9.99,7.073,19.979,14.15,29.968,21.225"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="9" d="M426.333,293.334
                        c0,13.666,2,27.666,0.667,41.333c-0.333,4.333-1.333,6.333-5.667,8c-3,1.333-9.666,2.667-12.666,0.667
                        c-6.667-4.667-6-18.667-6-25.667c0-2.667,0-5.333,0-7.667"/>
                        <!-- A --><path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="8" d="M434.51,348.031
                            c3.445-36.89,6.891-73.777,10.09-108.029"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="7" d="M440.219,242.158
                            c4.934,0,11.512,0,16.447,0"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="7" d="M451.938,238.974
                            c3.256,37.237,6.516,74.474,9.541,109.05"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="7" d="M440.219,327.408
                            c4.934,0,11.512,0,16.447,0"/>
                        <!-- S--><path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="11" d="M494.562,269.495
                        c0-10.361,2-20.008-7.667-26.082c-15-9.646-16,17.507-16.667,27.868"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="11" d="M467.687,270.947
                            c9.99,7.073,19.979,14.15,29.968,21.225"/>
                        <path clip-path="url(#camisas)" fill="none" stroke="#000000" stroke-width="11" d="M494.228,292.61
                            c0,13.666,2,27.666,0.667,41.333c-0.333,4.332-1.333,6.332-5.667,8c-3,1.332-9.666,2.666-12.666,0.666
                            c-6.667-4.666-6-18.666-6-25.666c0-2.668,0-5.334,0-7.668"/>
                </svg>
            </a>
        </div>

        <div id="contact" class="parallax" data-background-speed-y="0" data-parallax-align="top">
            <div class="background_black"></div>
            <div class="col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-6"></div>
                <div class="col-lg-6 col-md-6 col-sm-6"><div>
                <table class="contact" >
                    <tr>
                        <td colspan="2" class="decoration">
                            <p class="scrollflow -slide-top" data-scrollflow-start="0" data-scrollflow-distance="15" data-scrollflow-amount="30"></p>
                        </td>
                    </tr>
                    <tr>
                        <td class="icon"><p class="scrollflow -slide-left" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"><i class="fa fa-phone fa-lg"></i></p></td>
                        <td class="text"><p class="scrollflow -slide-right" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30">(999) 9 48 30 46</p> </td>
                    </tr>
                    <tr>
                        <td class="icon"><p class="scrollflow -slide-left" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"><i class="fa fa-envelope fa-lg"></i></p></td>
                        <td class="text"><p class="scrollflow -slide-right" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30">contacto@braggart.com</p> </td>
                    </tr>
                    <tr>
                        <td class="icon"><p class="scrollflow -slide-left" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"><i class="fa fa-facebook-official fa-lg"></i></p></td>
                        <td class="text"><p class="scrollflow -slide-right" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30">Tienda Braggart</p></td>
                    </tr>
                    <tr>
                        <td class="icon"><p class="scrollflow -slide-left" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"><i class="fa fa-insta-official fa-lg"></i></p></td>
                        <td class="text"><p class="scrollflow -slide-right" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"> @BraggartMX </p></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="decoration">
                            <p class="scrollflow -slide-bottom" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"></p>
                        </td>
                    </tr>   
                </table>
            </div>
        </div>
    <!--</div>-->
</div>
</div><!--Container-->

<!--Login Slidebar-->
<?php include_once("login_register.html");?>
<!--Cart Slidebar-->
<?php include_once("cart.html");?>
<!--Product Slidebar-->
<?php include_once("wishlist.html");?>
<!--BODY-->
<?php include_once("footer.html");?>

    <script src="http://imakewebthings.github.com/jquery-waypoints/waypoints.min.js" type="text/javascript"></script>
  <script>
    /*Fix para el parallax en Chrome*/

    var isChrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
    if (isChrome)
    {

        var itemArr = $('.parallax');

        $(window).scroll(function()
        {
            var pos = $(window).scrollTop();
            var wh = window.innerHeight;

            $(itemArr).each(function(i, item){

                var p = $(item).position();
                var h = $(item).height();
                if (p.top + h > pos && p.top < pos+wh)
                {
                    // items ir redzams
                    var prc = (p.top - pos +h)/wh ;
                    //console.log(prc);
                    $(item).css({'background-position':'center '+prc+'%'});
                }

            });
        });

    }
    /*Diamantito*/ 
 
var diamondSvg = {
    "diamond_little": {
        "strokepath": [
            {
                "path": "M 37.521 18.512 L 37.521 49.847",
                "duration": 300
            },
            {
                "path": "M 37.576 18.621 L 53.416 41.372",
                "duration": 300
            },
            {
                "path": "M 37.521 18.512 L 21.854 42.012",
                "duration": 300
            },
            {
                "path": "M 21.854 42.012 L 37.521 49.847",
                "duration": 300
            },
            {
                "path": "M 37.521 49.847 L 53.588 41.725",
                "duration": 300
            },
            {
                "path": "M 21.854 42.012 L 21.854 26.805",
                "duration": 300
            },
            {
                "path": "M 21.854 26.805 L 37.521 32.164",
                "duration": 300
            },
            {
                "path": "M 37.521 32.164 L 53.416 26.519",
                "duration": 300
            },
            {
                "path": "M 37.521 32.164 L 21.854 42.012",
                "duration": 300
            },
            {
                "path": "M 21.854 26.805 L 37.521 49.847",
                "duration": 300
            },
            {
                "path": "M 37.521 49.847 L 53.416 26.805",
                "duration": 300
            },
            {
                "path": "M 37.521 32.164 L 53.016 41.372",
                "duration": 300
            },
            {
                "path": "M 53.588 26.519 L 53.588 41.372",
                "duration": 300
            }
        ],
        "dimensions": {
            "width": 75,
            "height": 90
        }
    }
}; 
 
 

    /*Parallax scrolling*/
    var deleteLog = false;
    var paths;

    jQuery(document).ready(function($) {
      $('#full-width-slider').royalSlider({
        loop:true,
        keyboardNavEnabled: true,
        imageScaleMode: "fill",
        controlNavigation: "none",
        navigateByClick: true,
        usePreloader: true,
        sliderDrag: false
      });


      $(fullscreenParallax);
      


      setInterval(function(){
        var slider = $(".royalSlider").data('royalSlider');
        slider.next();  // next slide
    }, 4500);



      var width = $(window).width();
      var height = $(window).height();

      $('#full-width-slider').css({width: width+"px", height:height+"px"});

      //effects

      var controller = $.superscrollorama();
      // individual element tween examples
      controller.addTween('#title', TweenMax.fromTo( $('#title'), .50, {css:{opacity:0, 'letter-spacing':'30px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, 'letter-spacing':'-10px'}, ease:Quad.easeInOut}), 0, 10); // 100 px offset for better timing
      controller.addTween('#fly-it', TweenMax.from( $('#fly-it'), .25, {css:{right:'1000px'}, ease:Quad.easeInOut}));
     

              /*HANDWRITING STUFF*/
        // Store a reference to our paths, excluding our clip path
        paths = $('path:not(defs path)');

        // For each path, set the stroke-dasharray and stroke-dashoffset
        // equal to the path's total length, hence rendering it invisible
        paths.each(function(i, e) {
            e.style.strokeDasharray = e.style.strokeDashoffset = e.getTotalLength();
        });


        




      /*Svg Painter*/
     $('#diamond_little').lazylinepainter( 
         {
            "svgData": diamondSvg,
            "strokeWidth": 2,
            "strokeColor": "#FFFFFF",
            "responsive": "true"
        }).lazylinepainter('paint');



 
    }); //End jquery

    

/*Password placeholder , so the placeholder actually shows, and not just dots*/
    $(function() {
    // Invoke the plugin
    $('input, textarea').placeholder({customClass:'my-placeholder'});
    // That’s it, really.
    });
    
  
 $(function() {
     var tlTienda  = new TimelineLite();
     var tlCamisas = new TimelineLite();
     var tlHome = new TimelineLite();

     var homeCounter = 0;
     var usCounter= 0;

        $('#home').waypoint(function() {
        homeCounter++;
         console.log("home " + homeCounter);
         if (homeCounter == 1) {
            tlHome.add([
                //La tienda front letters
            TweenLite.to(paths.eq(0), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(1), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(2), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(3), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(4), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(5), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(6), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(7), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(8), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(9), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(10), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(11), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(12), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(13), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(14), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(15), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(16), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(17), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(18), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(19), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(20), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(21), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(22), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(23), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(24), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(25), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(26), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(27), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(28), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(29), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(30), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(31), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(32), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(33), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(34), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(35), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(36), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(37), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(38), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(39), 1, {strokeDashoffset: 0, delay: 0.0}),

            TweenLite.to(paths.eq(40), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(41), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(42), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(43), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(44), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(45), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(46), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(47), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(48), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(49), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(50), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(51), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(52), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(53), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(54), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(55), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(56), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(57), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(58), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(59), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(60), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(61), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(62), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(63), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(64), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(65), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(66), 1, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(67), 1, {strokeDashoffset: 0, delay: 0.0}),         


            ]);

            }
         });

       $('#us').waypoint(function() {
        usCounter++;
         console.log("us" + usCounter);
         if (usCounter == 1) {
            tlTienda.add([
                //La tienda front letters
               TweenLite.to(paths.eq(68), 0.3, {strokeDashoffset: 0, delay: 0.0}), //L
                TweenLite.to(paths.eq(69), 0.3, {strokeDashoffset: 0, delay: 0.3}), //A
                TweenLite.to(paths.eq(70), 0.3, {strokeDashoffset: 0, delay: 0.6}), //-
                TweenLite.to(paths.eq(71), 0.3, {strokeDashoffset: 0, delay: 0.9}),
                TweenLite.to(paths.eq(72), 0.3, {strokeDashoffset: 0, delay: 1.2}),
                TweenLite.to(paths.eq(73), 0.3, {strokeDashoffset: 0, delay: 1.5}),
                TweenLite.to(paths.eq(74), 0.3, {strokeDashoffset: 0, delay: 1.8}),
                TweenLite.to(paths.eq(75), 0.3, {strokeDashoffset: 0, delay: 2.1}),
                TweenLite.to(paths.eq(76), 0.3, {strokeDashoffset: 0, delay: 2.4}),
                TweenLite.to(paths.eq(77), 0.3, {strokeDashoffset: 0, delay: 2.7}),
                TweenLite.to(paths.eq(78), 0.3, {strokeDashoffset: 0, delay: 3.0}),
                TweenLite.to(paths.eq(79), 0.3, {strokeDashoffset: 0, delay: 3.3}),
                TweenLite.to(paths.eq(80), 0.3, {strokeDashoffset: 0, delay: 3.6}),
                TweenLite.to(paths.eq(81), 0.3, {strokeDashoffset: 0, delay: 3.9}),
                TweenLite.to(paths.eq(82), 0.3, {strokeDashoffset: 0, delay: 4.1}),
                TweenLite.to(paths.eq(83), 0.3, {strokeDashoffset: 0, delay: 4.4}),
                TweenLite.to(paths.eq(84), 0.3, {strokeDashoffset: 0, delay: 4.7}),
                TweenLite.to(paths.eq(85), 0.3, {strokeDashoffset: 0, delay: 5.0}),
                TweenLite.to(paths.eq(86), 0.3, {strokeDashoffset: 0, delay: 5.3}),
                TweenLite.to(paths.eq(87), 0.3, {strokeDashoffset: 0, delay: 5.6}),
                TweenLite.to(paths.eq(88), 0.3, {strokeDashoffset: 0, delay: 5.9}),

                //La tienda shadow
                TweenLite.to(paths.eq(89), 0.3, {strokeDashoffset: 0, delay: 0.0}),
                TweenLite.to(paths.eq(90), 0.3, {strokeDashoffset: 0, delay: 0.3}), //A
                TweenLite.to(paths.eq(91), 0.3, {strokeDashoffset: 0, delay: 0.6}), //-
                TweenLite.to(paths.eq(92), 0.3, {strokeDashoffset: 0, delay: 0.9}),
                TweenLite.to(paths.eq(93), 0.3, {strokeDashoffset: 0, delay: 1.2}),
                TweenLite.to(paths.eq(94), 0.3, {strokeDashoffset: 0, delay: 1.5}),
                TweenLite.to(paths.eq(95), 0.3, {strokeDashoffset: 0, delay: 1.8}),
                TweenLite.to(paths.eq(96), 0.3, {strokeDashoffset: 0, delay: 2.1}),
                TweenLite.to(paths.eq(97), 0.3, {strokeDashoffset: 0, delay: 2.4}),
                TweenLite.to(paths.eq(98), 0.3, {strokeDashoffset: 0, delay: 2.7}),
                TweenLite.to(paths.eq(99), 0.3, {strokeDashoffset: 0, delay: 3.0}),
                TweenLite.to(paths.eq(100), 0.3, {strokeDashoffset: 0, delay: 3.3}),
                TweenLite.to(paths.eq(101), 0.3, {strokeDashoffset: 0, delay: 3.6}),
                TweenLite.to(paths.eq(102), 0.3, {strokeDashoffset: 0, delay: 3.9}),
                TweenLite.to(paths.eq(103), 0.3, {strokeDashoffset: 0, delay: 4.1}),
                TweenLite.to(paths.eq(104), 0.3, {strokeDashoffset: 0, delay: 4.4}),
                TweenLite.to(paths.eq(105), 0.3, {strokeDashoffset: 0, delay: 4.7}),
                TweenLite.to(paths.eq(106), 0.3, {strokeDashoffset: 0, delay: 5.0}),
                TweenLite.to(paths.eq(107), 0.3, {strokeDashoffset: 0, delay: 5.3}),
                TweenLite.to(paths.eq(108), 0.3, {strokeDashoffset: 0, delay: 5.6}),
                TweenLite.to(paths.eq(109), 0.3, {strokeDashoffset: 0, delay: 5.9}),          


            ]);
                tlTienda.restart();

            }else{
                tlTienda.restart();
            }
         }, {
           offset: '60%'
         });

      
       $('#us').waypoint(function() {
        homeCounter++;
         console.log("ushome" + homeCounter);
         if (homeCounter == 1) {
            }else{
                if (homeCounter%2!=0) {
                    tlHome.restart();
                    $('#diamond_little').lazylinepainter('erase');
                     $('#diamond_little').lazylinepainter('paint');
                }
            }
         }, {
           offset: '99%'
         });


        var shirtsCounter= 0;
       $('#shirts').waypoint(function() {
        shirtsCounter++;
         console.log("shirts" + shirtsCounter);
         if (shirtsCounter == 1) {
            tlCamisas.add([
                        //C
                    TweenLite.to(paths.eq(110), 0.3, {strokeDashoffset: 0, delay: 0.0}),
                        //A
                    TweenLite.to(paths.eq(111), 0.3, {strokeDashoffset: 0, delay: 0.2}),
                    TweenLite.to(paths.eq(112), 0.3, {strokeDashoffset: 0, delay: 0.4}),
                    TweenLite.to(paths.eq(113), 0.3, {strokeDashoffset: 0, delay: 0.5}),
                    TweenLite.to(paths.eq(114), 0.3, {strokeDashoffset: 0, delay: 0.8}),
                        //M
                    TweenLite.to(paths.eq(115), 0.3, {strokeDashoffset: 0, delay: 1.2}),
                    TweenLite.to(paths.eq(116), 0.3, {strokeDashoffset: 0, delay: 1.5}),
                    TweenLite.to(paths.eq(117), 0.3, {strokeDashoffset: 0, delay: 1.8}),
                    TweenLite.to(paths.eq(118), 0.3, {strokeDashoffset: 0, delay: 2.1}),
                    //I
                    TweenLite.to(paths.eq(119), 0.3, {strokeDashoffset: 0, delay: 2.4}),
                    //S
                    TweenLite.to(paths.eq(120), 0.3, {strokeDashoffset: 0, delay: 2.7}),
                    TweenLite.to(paths.eq(121), 0.3, {strokeDashoffset: 0, delay: 2.9}),
                    TweenLite.to(paths.eq(122), 0.3, {strokeDashoffset: 0, delay: 3.2}),
                    //A
                    TweenLite.to(paths.eq(123), 0.3, {strokeDashoffset: 0, delay: 3.5}),
                    TweenLite.to(paths.eq(124), 0.3, {strokeDashoffset: 0, delay: 3.7}),
                    TweenLite.to(paths.eq(125), 0.3, {strokeDashoffset: 0, delay: 4.0}),
                    TweenLite.to(paths.eq(126), 0.3, {strokeDashoffset: 0, delay: 4.3}),
                    //S
                    TweenLite.to(paths.eq(127), 0.3, {strokeDashoffset: 0, delay: 4.6}),
                    TweenLite.to(paths.eq(128), 0.3, {strokeDashoffset: 0, delay: 4.9}),
                    TweenLite.to(paths.eq(129), 0.3, {strokeDashoffset: 0, delay: 5.1}),


                    //camisas shadow
                        //C
                    TweenLite.to(paths.eq(130), 0.3, {strokeDashoffset: 0, delay: 0.0}),
                        //A
                    TweenLite.to(paths.eq(131), 0.3, {strokeDashoffset: 0, delay: 0.2}),
                    TweenLite.to(paths.eq(132), 0.3, {strokeDashoffset: 0, delay: 0.4}),
                    TweenLite.to(paths.eq(133), 0.3, {strokeDashoffset: 0, delay: 0.5}),
                    TweenLite.to(paths.eq(134), 0.3, {strokeDashoffset: 0, delay: 0.8}),
                        //M
                    TweenLite.to(paths.eq(135), 0.3, {strokeDashoffset: 0, delay: 1.2}),
                    TweenLite.to(paths.eq(136), 0.3, {strokeDashoffset: 0, delay: 1.5}),
                    TweenLite.to(paths.eq(137), 0.3, {strokeDashoffset: 0, delay: 1.8}),
                    TweenLite.to(paths.eq(138), 0.3, {strokeDashoffset: 0, delay: 2.1}),
                    //I
                    TweenLite.to(paths.eq(139), 0.3, {strokeDashoffset: 0, delay: 2.4}),
                    //S
                    TweenLite.to(paths.eq(140), 0.3, {strokeDashoffset: 0, delay: 2.7}),
                    TweenLite.to(paths.eq(141), 0.3, {strokeDashoffset: 0, delay: 2.9}),
                    TweenLite.to(paths.eq(142), 0.3, {strokeDashoffset: 0, delay: 3.2}),
                    //A
                    TweenLite.to(paths.eq(143), 0.3, {strokeDashoffset: 0, delay: 3.5}),
                    TweenLite.to(paths.eq(144), 0.3, {strokeDashoffset: 0, delay: 3.7}),
                    TweenLite.to(paths.eq(145), 0.3, {strokeDashoffset: 0, delay: 4.0}),
                    TweenLite.to(paths.eq(146), 0.3, {strokeDashoffset: 0, delay: 4.3}),
                    //S
                    TweenLite.to(paths.eq(147), 0.3, {strokeDashoffset: 0, delay: 4.6}),
                    TweenLite.to(paths.eq(148), 0.3, {strokeDashoffset: 0, delay: 4.9}),
                    TweenLite.to(paths.eq(149), 0.3, {strokeDashoffset: 0, delay: 5.1}),     

            ]);
                tlCamisas.restart();
            }else{
                tlCamisas.restart();
            }
         }, {
           offset: '50%'
         });

       $('#contact').waypoint(function() {
         console.log("contact");
         });
    });
   
    </script>
