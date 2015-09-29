<?php include_once("header.html");?>
<?php
    function __autoload($nombre_clase) {
        include 'cp/clases/'.$nombre_clase .'.php';
    }
    $temporal = new slide();
    $listaTemporal = $temporal -> listarslideActivas();

    $notify_login = false;

    if(isset($_GET["ac"]) && $_GET["ac"] == "login"){
        $notify_login = true;
        if(isset($_SESSION["braggart_id_user"])){
            $notify_login = false;            
        }
    }

    $verify_token = false;

    if(isset($_GET["rp"]) && $_GET["rp"] == "invalidtoken"){
        $verify_token = true;
    }
?>

<!--BODY-->

<!--<div id="pagepiling">-->
            
        <div id="home" class="parallax " data-background-speed-y="0" data-parallax-align="bottom">
            <div class="background_black"></div>
            <div id="logo_div" style="bottom:0;width:100%;overflow:hidden;">
                <svg id="logo_svg" class="logo-slide" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="365px" height="190px" viewBox="0 0 365 190" enable-background="new 0 0 365 190">
                    <defs>
                        <clipPath id="bLogo" >
                            <path d="M97.659,97.727c1.545-1.406,2.317-2.532,2.317-3.374v-7.688c-0.291-1.897-0.994-3.167-2.11-3.81
                                c-0.796-0.459-2.104-0.688-3.924-0.688h-3.099v36.879h1.997v-18.153l0.62-0.297c0.199-0.093,0.428-0.207,0.688-0.345l1.354-0.733
                                l3.396,19.529h1.974l-3.649-20.906L97.659,97.727z M94.538,97.818l-1.698,1.125V83.957l1.147,0.046
                                c2.463,0.123,3.778,0.941,3.946,2.456v0.138v7.757C97.934,95.179,96.802,96.334,94.538,97.818z"/>
                            <path d="M60.293,82.167h-2.685h-1.951v36.856h4.636c1.27,0,2.348-0.428,3.236-1.285c0.887-0.856,1.331-1.897,1.331-3.121V99.861
                                c0-1.178-0.43-2.195-1.285-3.053l-0.78-0.779l0.78-0.803c0.855-0.841,1.285-1.851,1.285-3.029v-5.623
                                c0-1.224-0.444-2.264-1.331-3.121C62.641,82.596,61.563,82.167,60.293,82.167z M62.909,99.861v14.756
                                c0,0.719-0.252,1.331-0.757,1.836c-0.521,0.505-1.141,0.757-1.859,0.757h-2.685V97.29l2.685-0.022c0.719,0,1.338,0.252,1.859,0.756
                                C62.657,98.529,62.909,99.143,62.909,99.861z M62.909,92.196c0,0.704-0.252,1.308-0.757,1.813c-0.521,0.521-1.141,0.78-1.859,0.78
                                l-2.685-0.023V83.98h2.685c0.719,0,1.338,0.252,1.859,0.757c0.505,0.505,0.757,1.117,0.757,1.836V92.196z"/>
                            <path d="M166.653,82.259c-1.408,0-2.609,0.429-3.604,1.285c-0.995,0.857-1.492,1.897-1.492,3.121v27.929
                                c0,1.225,0.497,2.266,1.492,3.121c0.994,0.857,2.195,1.285,3.604,1.285c1.406,0,2.607-0.428,3.603-1.285
                                c0.994-0.855,1.492-1.896,1.492-3.121V96.51h-4.819v1.606h2.616v16.478c0,0.704-0.283,1.309-0.849,1.813
                                c-0.566,0.505-1.247,0.757-2.042,0.757c-0.796,0-1.478-0.252-2.042-0.757c-0.566-0.505-0.85-1.109-0.85-1.813V86.665
                                c0-0.704,0.283-1.308,0.85-1.813c0.565-0.505,1.247-0.757,2.042-0.757s1.476,0.252,2.042,0.757
                                c0.565,0.505,0.849,1.109,0.849,1.813v2.295h2.203v-2.295c0-1.224-0.498-2.264-1.492-3.121
                                C169.261,82.688,168.06,82.259,166.653,82.259z"/>
                            <path d="M275.422,97.727c1.545-1.406,2.318-2.532,2.318-3.374v-7.688c-0.291-1.897-0.994-3.167-2.111-3.81
                                c-0.795-0.459-2.104-0.688-3.924-0.688h-3.098v36.879h1.995v-18.153l0.619-0.297c0.199-0.093,0.429-0.207,0.689-0.345l1.354-0.733
                                l3.396,19.529h1.973l-3.647-20.906L275.422,97.727z M272.301,97.818l-1.697,1.125V83.957l1.146,0.046
                                c2.463,0.123,3.779,0.941,3.947,2.456v0.138v7.757C275.697,95.179,274.564,96.334,272.301,97.818z"/>
                            <polygon points="303.883,82.098 303.883,84.187 307.418,84.187 307.418,118.979 309.414,118.979 309.414,84.187 312.949,84.187 
                                312.949,82.098  "/>
                            <path d="M128.897,82.19L125.661,119h1.928l0.528-5.943h5.943l0.528,5.943h1.928l-3.235-36.811L128.897,82.19L128.897,82.19z
                                 M128.346,110.898l2.501-27.492h0.505l2.479,27.492H128.346z"/>
                            <path d="M202.895,82.259c-1.407,0-2.608,0.429-3.604,1.285c-0.994,0.857-1.492,1.897-1.492,3.121v27.929
                                c0,1.225,0.498,2.266,1.492,3.121c0.994,0.857,2.195,1.285,3.604,1.285c1.406,0,2.607-0.428,3.603-1.285
                                c0.994-0.855,1.492-1.896,1.492-3.121V96.51h-4.818v1.606h2.615v16.478c0,0.704-0.283,1.309-0.851,1.813
                                c-0.566,0.505-1.245,0.757-2.041,0.757c-0.797,0-1.477-0.252-2.043-0.757c-0.565-0.505-0.85-1.109-0.85-1.813V86.665
                                c0-0.704,0.283-1.308,0.85-1.813c0.567-0.505,1.246-0.757,2.043-0.757c0.796,0,1.476,0.252,2.041,0.757
                                c0.566,0.505,0.851,1.109,0.851,1.813v2.295h2.203v-2.295c0-1.224-0.498-2.264-1.492-3.121
                                C205.502,82.688,204.301,82.259,202.895,82.259z"/>
                            <path d="M235.9,82.19L232.664,119h1.928l0.527-5.943h5.945l0.526,5.943h1.928l-3.235-36.811L235.9,82.19L235.9,82.19z
                                 M235.35,110.898l2.502-27.492h0.505l2.479,27.492H235.35z"/>
                            <path d="M161.424,141.252h-2.012V150h2.063c2.313,0,3.148-1.975,3.148-4.374S163.786,141.252,161.424,141.252z M161.475,148.9
                                h-0.912v-6.549h0.861c1.438,0,2.037,1.35,2.037,3.273S162.861,148.9,161.475,148.9z"/>
                            <path d="M144.637,144.301c-0.149,0.288-0.362,0.713-0.362,0.713h-0.024c0,0-0.2-0.425-0.351-0.699l-1.624-3.063h-1.249V150h1.1
                                v-5.936c0-0.352-0.014-0.787-0.014-0.787h0.024c0,0,0.2,0.398,0.351,0.687l1.725,3.161h0.102l1.763-3.174
                                c0.162-0.287,0.324-0.662,0.324-0.662h0.024c0,0-0.013,0.412-0.013,0.775V150h1.112v-8.748h-1.264L144.637,144.301z"/>
                            <path d="M152.85,141.252L150.574,150h1.213l0.438-1.787h2.476l0.449,1.787h1.213l-2.275-8.748H152.85z M152.462,147.176
                                l0.813-3.299c0.088-0.338,0.188-0.863,0.188-0.863h0.025c0,0,0.088,0.525,0.176,0.863l0.812,3.299H152.462z"/>
                            <path d="M202.522,144.214c0-1.624-0.862-2.962-2.813-2.962h-2.237V150h1.15v-2.799h0.949c0.175,0,0.351,0,0.513-0.038l1.237,2.837
                                h1.236l-1.399-3.199C202.085,146.301,202.522,145.326,202.522,144.214z M199.599,146.102h-0.975v-3.75h0.975
                                c1.188,0,1.774,0.726,1.774,1.875C201.373,145.352,200.786,146.102,199.599,146.102z"/>
                            <polygon points="225.859,142.364 225.859,141.252 221.436,141.252 221.436,150 225.859,150 225.859,148.9 222.586,148.9 
                                222.586,146.477 225.372,146.477 225.372,145.376 222.586,145.376 222.586,142.364     "/>
                            <path d="M214.724,144.301c-0.149,0.288-0.361,0.713-0.361,0.713h-0.025c0,0-0.2-0.425-0.35-0.699l-1.625-3.063h-1.25V150h1.1
                                v-5.936c0-0.352-0.012-0.787-0.012-0.787h0.023c0,0,0.2,0.398,0.352,0.687l1.725,3.161h0.101l1.762-3.174
                                c0.163-0.287,0.325-0.662,0.325-0.662h0.024c0,0-0.013,0.412-0.013,0.775V150h1.112v-8.748h-1.264L214.724,144.301z"/>
                            <path d="M191.211,141.127c-2.137,0-2.898,2.025-2.898,4.499c0,2.476,0.763,4.499,2.898,4.499c2.149,0,2.912-2.023,2.912-4.499
                                C194.123,143.152,193.36,141.127,191.211,141.127z M191.211,149.025c-1.225,0-1.75-1.351-1.75-3.399s0.513-3.399,1.75-3.399
                                c1.25,0,1.762,1.351,1.762,3.399S192.448,149.025,191.211,149.025z"/>
                            <polygon points="168.036,150 172.46,150 172.46,148.9 169.188,148.9 169.188,146.477 171.973,146.477 171.973,145.376 
                                169.188,145.376 169.188,142.364 172.46,142.364 172.46,141.252 168.036,141.252   "/>
                            <polygon points="181.174,150 182.324,150 182.324,146.838 185.099,146.838 185.099,145.738 182.324,145.738 182.324,142.364 
                                185.598,142.364 185.598,141.252 181.174,141.252     "/>            
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
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M131.732,79.809
                            c1.211,13.838,2.423,27.675,3.549,40.526"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M126.191,120.324
                            c1.293-13.832,2.586-27.662,3.785-40.506"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M128.334,112.217c1.852,0,4.32,0,6.173,0"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M238.822,79.809
                            c1.211,13.838,2.423,27.675,3.549,40.525"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3.5" stroke-miterlimit="10" d="M233.281,120.323
                            c1.293-13.831,2.586-27.662,3.786-40.505"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M235.424,112.216c1.853,0,4.32,0,6.173,0"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M55.412,82.5c1.87,0.172,4.052-0.172,5.818,0.602
                            c2.701,1.288,2.077,3.436,2.077,5.67c0,1.461,0.731,4.289-0.308,5.406c-1.145,1.204-4.368,0.61-6.03,0.523"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M55.615,95.736c2.026,0.303,4.394-0.305,6.309,1.066
                            c2.93,2.283,2.254,6.093,2.254,10.052c0,2.59,0.449,8.312-1.178,9.906c-2.333,2.286-6.164,1.497-8.083,1.333"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M56.333,81.578c0,12.443,0,24.886,0,37.328"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M91.917,81.408c0,12.442,0,25.66,0,38.102"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M92.5,82.938c1.878,0,5.066-0.102,5.809,1.835
                            c0.263,0.716,0.307,1.853,0.394,2.651c0.087,1.01,0.131,2.021,0.131,3.03c0,0.884,0.043,1.769,0,2.61
                            c-0.087,1.136-0.34,2.199-1.083,2.999c-0.743,0.799-1.502,1.451-2.375,2.125c-0.743,0.549-2.001,1.162-2.875,1.5"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M269.916,81.408c0,12.76,0,25.52,0,38.279"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M308.501,84c0,15.741,0,27.652,0,35.734"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M304.674,82.666c-2.458,0,1.363,0,9.185,0"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M170.5,89.25c0.656-3.333-1.125-7.152-5.5-5.625
                            c-3.475,1.212-2.06,5.375-2.06,8.375c0,4.667-0.656,9.334-0.328,14c0,2.667-0.675,8.104,0.638,10.438
                            c0.528,1.182,6.006,3.051,7.625-1.063c0.319-0.703-0.028-19.646-0.028-18.252c-0.655,0.334-3.361-0.02-4.347,0.314"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M270.5,82.938c1.878,0,5.066-0.102,5.809,1.835
                            c0.263,0.716,0.307,1.853,0.394,2.651c0.088,1.01,0.131,2.021,0.131,3.03c0,0.884,0.044,1.769,0,2.61
                            c-0.087,1.136-0.34,2.199-1.082,2.999c-0.742,0.799-1.502,1.451-2.375,2.125c-0.742,0.549-2.002,1.162-2.875,1.5"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M274.213,98.17c1.22,7.348,2.438,14.695,3.57,21.518
                            "/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M96.39,98.402
                            c1.217,7.339,2.432,14.677,3.562,21.492"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M206.5,89.25c0.656-3.333-1.125-7.152-5.5-5.625
                            c-3.475,1.212-2.06,5.375-2.06,8.375c0,4.667-0.656,9.334-0.328,14c0,2.667-0.093,7.688,0.638,10.438
                        c0.332,1.25,6.006,3.051,7.625-1.063c0.319-0.703-0.028-19.646-0.028-18.252c-0.655,0.334-3.361-0.02-4.347,0.314"/>
                        <!-- Made for me-->
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.2" stroke-miterlimit="50" d="M141.565,141.252
                            c-0.031,2.625-0.031,5.688-0.031,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.2" stroke-miterlimit="50" d="M146.966,141.252
                            c-0.031,2.625-0.031,5.688-0.031,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.4" stroke-miterlimit="50" d="M141.357,140.866
                            c0.937,1.862,2.062,4.02,3.187,6.175"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-miterlimit="50" d="M143.708,147.057
                            c0.918-1.871,2.022-4.039,3.125-6.205"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.16" stroke-miterlimit="50" d="M151.162,150.143
                            c0.648-2.756,1.456-5.961,2.26-9.164"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.19" stroke-miterlimit="50" d="M153.53,140.977
                            c0.7,2.744,1.469,5.957,2.238,9.17"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.5854" stroke-miterlimit="50" d="M152.146,147.727
                            c0.774-0.008,1.679-0.004,2.582,0"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.2" stroke-miterlimit="50" d="M160.016,141.252
                            c-0.03,2.625-0.03,5.688-0.03,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.21" stroke-miterlimit="50" d="M168.616,141.252
                            c-0.031,2.625-0.031,5.688-0.031,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="50" d="M160.504,141.792
                            c0.646-0.044,1.355,0.08,1.954,0.256c0.76,0.194,0.974,0.62,1.25,1.229c0.415,0.89,0.536,2.166,0.349,3.104
                            c-0.093,0.465-0.503,2.271-0.768,2.444c-1.203,0.803-1.075,0.702-2.831,0.702"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.3" stroke-miterlimit="50" d="M169.146,141.727c1.044-0.011,2.262-0.004,3.479,0
                            "/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.2" stroke-miterlimit="50" d="M169.146,145.982c1.044-0.012,2.262-0.006,3.479,0
                            "/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.2" stroke-miterlimit="50" d="M169.146,149.482c1.044-0.012,2.262-0.006,3.479,0
                            "/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.21" stroke-miterlimit="50" d="M181.775,141.252
                            c-0.031,2.625-0.031,5.688-0.031,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.3" stroke-miterlimit="50" d="M182.146,141.727c1.044-0.011,2.262-0.004,3.479,0
                            "/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.22" stroke-miterlimit="50" d="M182.146,146.253
                            c0.886-0.012,1.92-0.01,2.952-0.007"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="50" d="M191.229,141.715
                            c-1.188-0.063-1.896,1.541-2.104,2.479c-0.188,0.938-0.146,1.896-0.146,2.854c0,0.521,0.043,0.771,0.271,1.188
                            c0.292,0.604,0.646,0.957,1.292,1.188c1.188,0.417,2.104-0.188,2.708-1.229c0.125-0.25,0.084-0.479,0.146-0.729
                            c0.063-0.271,0.188-0.563,0.271-0.834c0.188-0.604,0.021-1.188-0.104-1.791c-0.063-0.313-0.25-0.563-0.354-0.875
                            c-0.104-0.334-0.271-0.604-0.438-0.896c-0.375-0.563-0.543-1.021-1.229-1.271c-0.146-0.042-0.208-0.125-0.396-0.104"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.24" stroke-miterlimit="50" d="M198.046,141.252
                            c-0.031,2.625-0.031,5.688-0.031,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.3" stroke-miterlimit="50" d="M198.609,141.756c0.813,0,2.412,0.084,2.891,0.813
                            c0.292,0.396,0.406,0.994,0.469,1.494c0.063,0.521-0.052,1.152-0.344,1.59c-0.333,0.479-0.75,0.666-1.333,0.834
                            c-0.5,0.125-1.245,0.231-1.745,0.211"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.4" stroke-miterlimit="50" d="M200.654,146.844
                            c-0.017,0.203,0.188,0.781,0.235,0.984c0.078,0.281,0.203,0.484,0.345,0.734c0.233,0.422,0.75,1.358,0.891,1.828"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.2" stroke-miterlimit="50" d="M211.654,141.252
                            c-0.031,2.625-0.031,5.688-0.031,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.2" stroke-miterlimit="50" d="M217.055,141.252
                            c-0.03,2.625-0.03,5.688-0.03,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.4" stroke-miterlimit="50" d="M211.445,140.866
                            c0.938,1.862,2.063,4.02,3.188,6.175"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-miterlimit="50" d="M213.795,147.057
                            c0.92-1.871,2.023-4.039,3.125-6.205"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.21" stroke-miterlimit="50" d="M222.011,141.252
                            c-0.03,2.625-0.03,5.688-0.03,8.748"/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.3" stroke-miterlimit="50" d="M222.542,141.727c1.043-0.011,2.262-0.004,3.479,0
                            "/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.2" stroke-miterlimit="50" d="M222.541,145.982c1.044-0.012,2.262-0.006,3.479,0
                            "/>
                        <path clip-path="url(#bLogo)" fill="none" stroke="#FFFFFF" stroke-width="1.2" stroke-miterlimit="50" d="M222.541,149.482c1.044-0.012,2.262-0.006,3.479,0
                            "/>
                      <!--Hexagono -->
                    <path fill="none" stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="50" d="M6,58v73"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="10" d="M181,187l181.167-58.831"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="6.1169" stroke-miterlimit="10" d="M3.5,60.75l179-56.5"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="6" stroke-linejoin="bevel" stroke-miterlimit="10" d="M183,186.75L4,128.25"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="6" stroke-linejoin="bevel" stroke-miterlimit="10" d="M181,4l180.833,57.171"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="50" d="M360,58v73"/>
                        <!--Diamantito -->
                     <path fill="none" stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="10" d="M183,186.5L6,129V60L182.5,4L360,60.5V129L183,186.5
                        z"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" d="M82,130.5h204"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M182.713,27.887v35.75"
                        />
                    <path fill="none" stroke="#FFFFFF" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M200.717,53.919
                        l-17.938-25.905"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M182.713,27.887
                        l-17.429,26.563"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M165.285,54.449
                        l17.429,9.188"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M182.713,63.637
                        l18.003-9.718"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M165.285,54.449v-17.35
                        "/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M165.285,37.099
                        l17.429,8.396"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M182.713,45.496
                        l18.003-8.523"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M182.713,45.496
                        l-17.429,8.954"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M165.285,37.099
                        l17.429,26.538"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M182.713,63.637
                        l18.003-26.665"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M200.717,53.919
                        l-18.003-8.423"/>
                    <path fill="none" stroke="#FFFFFF" stroke-width="2.4188" stroke-linecap="round" stroke-miterlimit="10" d="M200.717,36.972v16.947
                        "/>
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
            <a  style="display:block;" href="store.php">
                <div id="us_animation"></div>
                <svg  id="tienda_hex" class="tienda_hex" xmlns="http://www.w3.org/2000/svg" width="800px" height="600px" viewBox="0 0 800 600">
                    <polygon opacity="0.2" fill="#FFFFFF" points="376.5,265.656 337,252.719 337,237.194 376.389,224.594 416,237.306 416,252.719 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="304.5,265.656 265,252.719 265,237.193 304.389,224.594 344,237.307 344,252.719 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="338,243.156 299,230.219 299,214.694 337.889,202.094 377,214.806 377,230.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="266,243.156 227,230.219 227,214.694 265.889,202.094 305,214.806 305,230.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="379,308.406 340,295.469 340,279.943 378.889,267.344 418,280.057 418,295.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="412.5,285.906 373,272.969 373,257.444 412.389,244.844 452,257.556 452,272.969 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="340.5,285.906 301,272.969 301,257.444 340.389,244.844 380,257.556 380,272.969 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="237,265.656 197,252.719 197,237.194 236.889,224.594 277,237.306 277,252.719 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="275,288.156 236,275.219 236,259.694 274.889,247.094 314,259.806 314,275.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="277.5,330.906 238,317.969 238,302.443 277.389,289.844 317,302.557 317,317.969 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="311,308.406 272,295.469 272,279.944 310.889,267.344 350,280.056 350,295.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="239,308.406 200,295.469 200,279.944 238.889,267.344 278,280.056 278,295.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="237,351.156 197,338.219 197,322.693 236.889,310.094 277,322.807 277,338.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="309,351.156 269,338.219 269,322.693 308.889,310.094 349,322.807 349,338.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="345,371.406 305,358.469 305,342.943 344.889,330.344 385,343.057 385,358.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="273,371.406 233,358.469 233,342.943 272.889,330.344 313,343.057 313,358.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="478,243.156 439,230.219 439,214.693 477.889,202.094 517,214.807 517,230.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="514,263.406 475,250.469 475,234.944 513.889,222.344 553,235.056 553,250.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="410,243.156 371,230.219 371,214.694 409.889,202.094 449,214.806 449,230.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="448.5,265.656 409,252.719 409,237.194 448.389,224.594 488,237.306 488,252.719 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="451,308.406 412,295.469 412,279.943 450.889,267.344 490,280.057 490,295.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="484.5,285.906 445,272.969 445,257.444 484.389,244.844 524,257.556 524,272.969 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="376.5,351.156 337,338.219 337,322.693 376.389,310.094 416,322.807 416,338.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="410,328.656 371,315.719 371,300.193 409.889,287.594 449,300.307 449,315.719 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="338,328.656 299,315.719 299,300.193 337.889,287.594 377,300.307 377,315.719 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="482,328.656 443,315.719 443,300.193 481.889,287.594 521,300.307 521,315.719 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="484.5,371.406 445,358.469 445,342.943 484.389,330.344 524,343.057 524,358.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="518,348.906 479,335.969 479,320.443 517.889,307.844 557,320.557 557,335.969 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="446,348.906 407,335.969 407,320.443 445.889,307.844 485,320.557 485,335.969 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="415,371.406 376,358.469 376,342.943 414.889,330.344 454,343.057 454,358.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="518,306.156 479,293.219 479,277.693 517.889,265.094 557,277.807 557,293.219 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="557.5,369.406 518,356.469 518,340.943 557.389,328.344 597,341.057 597,356.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="557.5,327.406 518,314.469 518,298.943 557.389,286.344 597,299.057 597,314.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="556.5,284.406 517,271.469 517,255.943 556.389,243.344 596,256.057 596,271.469 "/>
                    <polygon opacity="0.2" fill="#FFFFFF" points="556.5,245.406 517,232.469 517,216.943 556.389,204.344 596,217.057 596,232.469 "/>
                </svg>
            </a>   
        </div>

        <div id="shirts" class="parallax" data-background-speed-y="0" data-parallax-align="top">
            <div class="background_black"></div>
            <a style="display:block" href="shirts.php">
                <div id="shirts_animation"></div>
                <svg id="hexagons" class="hexagons" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="800px" height="600px" viewBox="0 0 800 600">
                    <polygon opacity="0.2" fill="#ffffff" points="376.5,265.656 337,252.719 337,237.194 376.389,224.594 416,237.306 416,252.719 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="304.5,265.656 265,252.719 265,237.193 304.389,224.594 344,237.307 344,252.719 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="338,243.156 299,230.219 299,214.694 337.889,202.094 377,214.806 377,230.219 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="266,243.156 227,230.219 227,214.694 265.889,202.094 305,214.806 305,230.219 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="379,308.406 340,295.469 340,279.943 378.889,267.344 418,280.057 418,295.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="412.5,285.906 373,272.969 373,257.444 412.389,244.844 452,257.556 452,272.969 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="340.5,285.906 301,272.969 301,257.444 340.389,244.844 380,257.556 380,272.969 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="237,265.656 197,252.719 197,237.194 236.889,224.594 277,237.306 277,252.719 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="275,288.156 236,275.219 236,259.694 274.889,247.094 314,259.806 314,275.219 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="277.5,330.906 238,317.969 238,302.443 277.389,289.844 317,302.557 317,317.969 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="311,308.406 272,295.469 272,279.944 310.889,267.344 350,280.056 350,295.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="239,308.406 200,295.469 200,279.944 238.889,267.344 278,280.056 278,295.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="237,351.156 197,338.219 197,322.693 236.889,310.094 277,322.807 277,338.219 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="309,351.156 269,338.219 269,322.693 308.889,310.094 349,322.807 349,338.219 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="345,371.406 305,358.469 305,342.943 344.889,330.344 385,343.057 385,358.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="273,371.406 233,358.469 233,342.943 272.889,330.344 313,343.057 313,358.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="478,243.156 439,230.219 439,214.693 477.889,202.094 517,214.807 517,230.219 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="514,263.406 475,250.469 475,234.944 513.889,222.344 553,235.056 553,250.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="410,243.156 371,230.219 371,214.694 409.889,202.094 449,214.806 449,230.219 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="448.5,265.656 409,252.719 409,237.194 448.389,224.594 488,237.306 488,252.719 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="451,308.406 412,295.469 412,279.943 450.889,267.344 490,280.057 490,295.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="484.5,285.906 445,272.969 445,257.444 484.389,244.844 524,257.556 524,272.969 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="376.5,351.156 337,338.219 337,322.693 376.389,310.094 416,322.807 416,338.219 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="410,328.656 371,315.719 371,300.193 409.889,287.594 449,300.307 449,315.719 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="338,328.656 299,315.719 299,300.193 337.889,287.594 377,300.307 377,315.719 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="482,328.656 443,315.719 443,300.193 481.889,287.594 521,300.307 521,315.719 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="484.5,371.406 445,358.469 445,342.943 484.389,330.344 524,343.057 524,358.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="518,348.906 479,335.969 479,320.443 517.889,307.844 557,320.557 557,335.969 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="446,348.906 407,335.969 407,320.443 445.889,307.844 485,320.557 485,335.969 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="415,371.406 376,358.469 376,342.943 414.889,330.344 454,343.057 454,358.469 "/>
                    <polygon opacity="0.2" fill="#ffffff" points="518,306.156 479,293.219 479,277.693 517.889,265.094 557,277.807 557,293.219 "/>
                </svg>
            </a>
        </div>

        <div id="contact" class="parallax" data-background-speed-y="0" data-parallax-align="top">
            <div class="background_black"></div>
            <div class="col-xs-12 centered_div">
                <div class="col-lg-6 col-md-6 col-sm-6"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 ">
                    <table class="contact" >
                        <tr>
                            <td colspan="2">
                                <svg id="ctUp" class="decoration_svg deco_top" version="1.1"  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="118px" height="30px" viewBox="0 0 118 30">
                                <path fill="none" stroke="#ffffff" stroke-width="1" stroke-miterlimit="10" d="M22.795,22.535h74.333"/>
                                <path fill="none" stroke="#ffffff" stroke-width="1" stroke-miterlimit="10" d="M3.312,25.535h113.301"/>

                                    <path fill="none" stroke="#ffffff" stroke-width="1" stroke-miterlimit="10" d="M52.192,8.518l10.216,9.811"/>
                                    <path fill="none" stroke="#ffffff" stroke-width="1" stroke-miterlimit="10" d="M62.424,8.534l-10.249,9.778"/>

                                    <path fill="none" stroke="#ffffff" stroke-width="1" stroke-miterlimit="10" d="M59.83,8.518l10.217,9.811"/>
                                    <path fill="none" stroke="#ffffff" stroke-width="1" stroke-miterlimit="10" d="M70.063,8.534l-10.248,9.778"/>

                                </svg>
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
                            <td class="text"><p class="scrollflow -slide-right" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30">Tienda <span class="braggart_txt">BRAGGART</span></p></td>
                        </tr>
                        <tr>
                            <td class="icon"><p class="scrollflow -slide-left" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"><i class="fa fa-insta-official fa-lg"></i></p></td>
                            <td class="text"><p class="scrollflow -slide-right" data-scrollflow-start="-50" data-scrollflow-distance="5" data-scrollflow-amount="30"> @BraggartMX </p></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                               <svg id="ctDown" class="decoration_svg deco_bottom" version="1.1"  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="118px" height="30px" viewBox="0 0 118 30">
                                    <path fill="none" stroke="#ffffff" stroke-miterlimit="10" d="M97.128,11.518H22.795"/>
                                    <path fill="none" stroke="#ffffff" stroke-miterlimit="10" d="M116.613,8.518H3.312"/>
                                    <path fill="none" stroke="#ffffff" stroke-miterlimit="10" d="M62.408,15.724l-10.216,9.812"/>
                                    <path fill="none" stroke="#ffffff" stroke-miterlimit="10" d="M52.175,15.74l10.249,9.778"/>
                                    <path fill="none" stroke="#ffffff" stroke-miterlimit="10" d="M70.047,15.724L59.83,25.535"/>
                                    <path fill="none" stroke="#ffffff" stroke-miterlimit="10" d="M59.814,15.74l10.248,9.778"/>
                                </svg>
                            </td>
                        </tr>   
                    </table>
                </div>
            </div>
        </div>
    <!--</div>-->
</div><!--Container-->
<!--</div>-->

<!--Login Slidebar-->
<?php include_once("login_register.html");?>
<!--Cart Slidebar-->
<?php include_once("cart.html");?>
<!--Product Slidebar-->
<?php include_once("wishlist.html");?>
<!-- SVGs -->
<?php include_once("svgs.html"); ?>
<!--BODY-->

<?php include_once("footer.html");?>
<script type="text/javascript">
    var notify_login = <?php echo json_encode($notify_login); ?>;
    if(notify_login){
        showMessage("Debes iniciar sesión", "Iniciar Sesión");
    }

    var verify_token = <?php echo json_encode($verify_token); ?>;
    if(verify_token){
        showMessage("Token invalido o expirado, realiza el proceso de renovación de contraseña de nuevo", "Reiniciar Contraseña");
    }
</script>
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
 

 

    /*Parallax scrolling*/
    var deleteLog = false;
    var homePath, usPath, usShadowPath, shirtsPath, shirtsShadowPath, hexagons, tienda_hex, ctUpPath,ctDownPath, pathsDmnd;

    if (BrowserDetect.browser == "Explorer") {
        $("#us_animation").attr('class','centered_abs_div');
        $("#us_animation").append(document.getElementById("us_svg_ie").innerHTML);
        $("#shirts_animation").attr('class','centered_abs_div');
        $("#shirts_animation").append(document.getElementById("shirts_svg_ie").innerHTML);
    }else{
        $("#us_animation").append(document.getElementById("us_svg_div").innerHTML);
        $("#shirts_animation").append(document.getElementById("shirts_svg_div").innerHTML);


    }

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
      
//    console.log("You are using <b>" + BrowserDetect.browser + "</b> with version <b>" + BrowserDetect.version + "</b>");
    


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
        homePath = $('#logo_svg path:not(defs path)');
        usPath = $('#us_svg path:not(defs path)');
        usShadowPath = $('#usShadow_svg path:not(defs path)');
        shirtsPath = $('#shirts_svg path:not(defs path)');
        shirtsShadowPath = $('#shirtsShadow_svg path:not(defs path)');
        ctUpPath = $('#ctUp path:not(defs path)');
        ctDownPath = $('#ctDown path:not(defs path)');
        hexagons= $(".hexagons polygon");
        tienda_hex =$(".tienda_hex polygon");
        pathsDmnd = $('#diamond_little path');




        // For each path, set the stroke-dasharray and stroke-dashoffset
        // equal to the path's total length, hence rendering it invisible
        homePath.each(function(i, e) {
            e.setAttribute('stroke-dashoffset', e.getTotalLength());
            e.setAttribute('stroke-dasharray', e.getTotalLength());
        });    
        usPath.each(function(i, e) {
            e.setAttribute('stroke-dashoffset', e.getTotalLength());
            e.setAttribute('stroke-dasharray', e.getTotalLength());
        }); 

        usShadowPath.each(function(i, e) {
            e.setAttribute('stroke-dashoffset', e.getTotalLength());
            e.setAttribute('stroke-dasharray', e.getTotalLength());
        });

        shirtsPath.each(function(i, e) {
            e.setAttribute('stroke-dashoffset', e.getTotalLength());
            e.setAttribute('stroke-dasharray', e.getTotalLength());
        });

        shirtsShadowPath.each(function(i, e) {
            e.setAttribute('stroke-dashoffset', e.getTotalLength());
            e.setAttribute('stroke-dasharray', e.getTotalLength());
        });

        ctUpPath.each(function(i, e) {
            e.setAttribute('stroke-dashoffset', e.getTotalLength());
            e.setAttribute('stroke-dasharray', e.getTotalLength());
        });

        ctDownPath.each(function(i, e) {
            e.setAttribute('stroke-dashoffset', e.getTotalLength());
            e.setAttribute('stroke-dasharray', e.getTotalLength());
        });

        pathsDmnd.each(function(i, e) {
            e.style.strokeDasharray = e.style.strokeDashoffset = e.getTotalLength();
        });





 
    }); //End jquery

    
    $(window).load(function() {      //Do the code in the {}s when the window has loaded 
      $("#containerSvg").fadeOut("fast");  //Fade out the #loader div
    });

/*Password placeholder , so the placeholder actually shows, and not just dots*/
    $(function() {
    // Invoke the plugin
        $('input, textarea').placeholder({customClass:'my-placeholder'});
    // That’s it, really.
    });
    
  
 $(function() {
     var tlTienda  = new TimelineMax();
     var tlCamisasHex  = new TimelineMax();
     var tlCamisas = new TimelineMax();
     var tlHome = new TimelineMax();
     var tlContact = new TimelineMax();
     var tlTiendaHex = new TimelineMax();
    var tlLoadDmnd  = new TimelineMax();
       

     var homeCounter = 0;
     var usCounter= 0;

        $('#home').waypoint(function() {
            homeCounter++;
             console.log("home " + homeCounter);
             if (homeCounter == 1) {
                tlHome.add([
                TweenMax.to(homePath.eq(0), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(1), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(2), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(3), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(4), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(5), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(6), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(7), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(8), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(9), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(10), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(11), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(12), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(13), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(14), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(15), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(16), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(17), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(18), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(19), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(20), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(21), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(22), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(23), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(24), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(25), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(26), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(27), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(28), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(29), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(30), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(31), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(32), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(33), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(34), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(35), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(36), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(37), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(38), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(39), 5, {strokeDashoffset: 0, delay: 0.0}),

                TweenMax.to(homePath.eq(40), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(41), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(42), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(43), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(44), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(45), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(46), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(47), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(48), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(49), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(50), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(51), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(52), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(53), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(54), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(55), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(56), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(57), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(58), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(59), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(60), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(61), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(62), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(63), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(64), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(65), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(66), 5, {strokeDashoffset: 0, delay: 0.0}),
                TweenMax.to(homePath.eq(67), 5, {strokeDashoffset: 0, delay: 0.0}),         

                ]);
     
            tlLoadDmnd.add([
                TweenLite.to(pathsDmnd.eq(0), 2, {strokeDashoffset: 0, delay: 0.0}),
                TweenLite.to(pathsDmnd.eq(1), 2, {strokeDashoffset: 0, delay: 0.0}),
                TweenLite.to(pathsDmnd.eq(2), 2, {strokeDashoffset: 0, delay: 0.0}),
                TweenLite.to(pathsDmnd.eq(3), 2, {strokeDashoffset: 0, delay: 0.0}),
                TweenLite.to(pathsDmnd.eq(4), 2, {strokeDashoffset: 0, delay: 0.0}),
                TweenLite.to(pathsDmnd.eq(5), 2, {strokeDashoffset: 0, delay: 0.0}),
                TweenLite.to(pathsDmnd.eq(6), 2, {strokeDashoffset: 0, delay: 0.0}),
                TweenLite.to(pathsDmnd.eq(7), 2, {strokeDashoffset: 0, delay: 0.0}),
                TweenLite.to(pathsDmnd.eq(8), 2, {strokeDashoffset: 0, delay: 0.0}),
                TweenLite.to(pathsDmnd.eq(9), 2, {strokeDashoffset: 0, delay: 0.0}),
                TweenLite.to(pathsDmnd.eq(10), 2, {strokeDashoffset: 0, delay: 0.0}),
                TweenLite.to(pathsDmnd.eq(11), 2, {strokeDashoffset: 0, delay: 0.0}),
                TweenLite.to(pathsDmnd.eq(12), 2, {strokeDashoffset: 0, delay: 0.0}),    
            ]);

                }
             });

       $('#us').waypoint(function() {
        usCounter++;
         console.log("us" + usCounter);
        if (usCounter == 1) {
            document.getElementById("tienda_hex").style.visibility = "visible";
            tlTiendaHex.add("stagger", "+=0.5");
            tlTiendaHex.staggerFrom(tienda_hex, 0.2, {scale:0, autoAlpha:0}, 0.16, "stagger");
            tlTiendaHex.play("stagger");
            if (BrowserDetect.browser == "Explorer") {
                    $('#us_text').animate({
                        'stroke-dashoffset':'0',
                        'fill-opacity': '1'
                        },8000);
                    $('#shadows').animate({
                        'fill-opacity': '1'
                        },8000);
            }else{
                tlTienda.add([
                    //La tienda front letters
                    TweenMax.to(usPath.eq(0), 0.3, {strokeDashoffset: 0, delay: 0.0}), //L
                    TweenMax.to(usPath.eq(1), 0.3, {strokeDashoffset: 0, delay: 0.3}), //A
                    TweenMax.to(usPath.eq(2), 0.3, {strokeDashoffset: 0, delay: 0.6}), //-
                    TweenMax.to(usPath.eq(3), 0.3, {strokeDashoffset: 0, delay: 0.9}),
                    TweenMax.to(usPath.eq(4), 0.3, {strokeDashoffset: 0, delay: 1.2}),
                    TweenMax.to(usPath.eq(5), 0.3, {strokeDashoffset: 0, delay: 1.5}),
                    TweenMax.to(usPath.eq(6), 0.3, {strokeDashoffset: 0, delay: 1.8}),
                    TweenMax.to(usPath.eq(7), 0.3, {strokeDashoffset: 0, delay: 2.1}),
                    TweenMax.to(usPath.eq(8), 0.3, {strokeDashoffset: 0, delay: 2.4}),
                    TweenMax.to(usPath.eq(9), 0.3, {strokeDashoffset: 0, delay: 2.7}),
                    TweenMax.to(usPath.eq(10), 0.3, {strokeDashoffset: 0, delay: 3.0}),
                    TweenMax.to(usPath.eq(11), 0.3, {strokeDashoffset: 0, delay: 3.3}),
                    TweenMax.to(usPath.eq(12), 0.3, {strokeDashoffset: 0, delay: 3.6}),
                    TweenMax.to(usPath.eq(13), 0.3, {strokeDashoffset: 0, delay: 3.9}),
                    TweenMax.to(usPath.eq(14), 0.3, {strokeDashoffset: 0, delay: 4.1}),
                    TweenMax.to(usPath.eq(15), 0.3, {strokeDashoffset: 0, delay: 4.4}),
                    TweenMax.to(usPath.eq(16), 0.3, {strokeDashoffset: 0, delay: 4.7}),
                    TweenMax.to(usPath.eq(17), 0.3, {strokeDashoffset: 0, delay: 5.0}),
                    TweenMax.to(usPath.eq(18), 0.3, {strokeDashoffset: 0, delay: 5.3}),
                    TweenMax.to(usPath.eq(19), 0.3, {strokeDashoffset: 0, delay: 5.6}),
                    TweenMax.to(usPath.eq(20), 0.3, {strokeDashoffset: 0, delay: 5.9}),

                    //La tienda shadow
                    TweenMax.to(usShadowPath.eq(0), 0.3, {strokeDashoffset: 0, delay: 0.0}),
                    TweenMax.to(usShadowPath.eq(1), 0.3, {strokeDashoffset: 0, delay: 0.3}), //A
                    TweenMax.to(usShadowPath.eq(2), 0.3, {strokeDashoffset: 0, delay: 0.6}), //-
                    TweenMax.to(usShadowPath.eq(3), 0.3, {strokeDashoffset: 0, delay: 0.9}),
                    TweenMax.to(usShadowPath.eq(4), 0.3, {strokeDashoffset: 0, delay: 1.2}),
                    TweenMax.to(usShadowPath.eq(5), 0.3, {strokeDashoffset: 0, delay: 1.5}),
                    TweenMax.to(usShadowPath.eq(6), 0.3, {strokeDashoffset: 0, delay: 1.8}),
                    TweenMax.to(usShadowPath.eq(7), 0.3, {strokeDashoffset: 0, delay: 2.1}),
                    TweenMax.to(usShadowPath.eq(8), 0.3, {strokeDashoffset: 0, delay: 2.4}),
                    TweenMax.to(usShadowPath.eq(9), 0.3, {strokeDashoffset: 0, delay: 2.7}),
                    TweenMax.to(usShadowPath.eq(10), 0.3, {strokeDashoffset: 0, delay: 3.0}),
                    TweenMax.to(usShadowPath.eq(11), 0.3, {strokeDashoffset: 0, delay: 3.3}),
                    TweenMax.to(usShadowPath.eq(12), 0.3, {strokeDashoffset: 0, delay: 3.6}),
                    TweenMax.to(usShadowPath.eq(13), 0.3, {strokeDashoffset: 0, delay: 3.9}),
                    TweenMax.to(usShadowPath.eq(14), 0.3, {strokeDashoffset: 0, delay: 4.1}),
                    TweenMax.to(usShadowPath.eq(15), 0.3, {strokeDashoffset: 0, delay: 4.4}),
                    TweenMax.to(usShadowPath.eq(16), 0.3, {strokeDashoffset: 0, delay: 4.7}),
                    TweenMax.to(usShadowPath.eq(17), 0.3, {strokeDashoffset: 0, delay: 5.0}),
                    TweenMax.to(usShadowPath.eq(18), 0.3, {strokeDashoffset: 0, delay: 5.3}),
                    TweenMax.to(usShadowPath.eq(19), 0.3, {strokeDashoffset: 0, delay: 5.6}),
                    TweenMax.to(usShadowPath.eq(20), 0.3, {strokeDashoffset: 0, delay: 5.9}),          


                ]);

                    tlTienda.restart();
            }

        }else{
            if (BrowserDetect.browser == "Explorer") {
                resetAnimTxt( $('#us_text'));
                resetShadow($('#shadows'));
                tlTiendaHex.restart();
            }else{
                tlTienda.restart();
                tlTiendaHex.restart();
            }        
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
                    tlLoadDmnd.restart();
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
            document.getElementById("hexagons").style.visibility = "visible";
            tlCamisasHex.add("stagger", "+=0.5");
            tlCamisasHex.staggerFrom(hexagons, 0.2, {scale:0, autoAlpha:0}, 0.15, "stagger");
            tlCamisasHex.play("stagger");
            if (BrowserDetect.browser == "Explorer") {
                    $('#shirts_text').animate({
                        'stroke-dashoffset':'0',
                        'fill-opacity': '1'
                        },8000);
                    $('#shirts_shadow').animate({
                        'fill-opacity': '1'
                        },8000);
            }else{
                tlCamisas.add([
                            //C
                        TweenMax.to(shirtsPath.eq(0), 0.3, {strokeDashoffset: 0, delay: 0.0}),
                            //A
                        TweenMax.to(shirtsPath.eq(1), 0.3, {strokeDashoffset: 0, delay: 0.2}),
                        TweenMax.to(shirtsPath.eq(2), 0.3, {strokeDashoffset: 0, delay: 0.4}),
                        TweenMax.to(shirtsPath.eq(3), 0.3, {strokeDashoffset: 0, delay: 0.5}),
                        TweenMax.to(shirtsPath.eq(4), 0.3, {strokeDashoffset: 0, delay: 0.8}),
                            //M
                        TweenMax.to(shirtsPath.eq(5), 0.3, {strokeDashoffset: 0, delay: 1.2}),
                        TweenMax.to(shirtsPath.eq(6), 0.3, {strokeDashoffset: 0, delay: 1.5}),
                        TweenMax.to(shirtsPath.eq(7), 0.3, {strokeDashoffset: 0, delay: 1.8}),
                        TweenMax.to(shirtsPath.eq(8), 0.3, {strokeDashoffset: 0, delay: 2.1}),
                        //I
                        TweenMax.to(shirtsPath.eq(9), 0.3, {strokeDashoffset: 0, delay: 2.4}),
                        //S
                        TweenMax.to(shirtsPath.eq(10), 0.3, {strokeDashoffset: 0, delay: 2.7}),
                        TweenMax.to(shirtsPath.eq(11), 0.3, {strokeDashoffset: 0, delay: 2.9}),
                        TweenMax.to(shirtsPath.eq(12), 0.3, {strokeDashoffset: 0, delay: 3.2}),
                        //A
                        TweenMax.to(shirtsPath.eq(13), 0.3, {strokeDashoffset: 0, delay: 3.5}),
                        TweenMax.to(shirtsPath.eq(14), 0.3, {strokeDashoffset: 0, delay: 3.7}),
                        TweenMax.to(shirtsPath.eq(15), 0.3, {strokeDashoffset: 0, delay: 4.0}),
                        TweenMax.to(shirtsPath.eq(16), 0.3, {strokeDashoffset: 0, delay: 4.3}),
                        //S
                        TweenMax.to(shirtsPath.eq(17), 0.3, {strokeDashoffset: 0, delay: 4.6}),
                        TweenMax.to(shirtsPath.eq(18), 0.3, {strokeDashoffset: 0, delay: 4.9}),
                        TweenMax.to(shirtsPath.eq(19), 0.3, {strokeDashoffset: 0, delay: 5.1}),


                        //camisas shadow
                            //C
                        TweenMax.to(shirtsShadowPath.eq(0), 0.3, {strokeDashoffset: 0, delay: 0.0}),
                            //A
                        TweenMax.to(shirtsShadowPath.eq(1), 0.3, {strokeDashoffset: 0, delay: 0.2}),
                        TweenMax.to(shirtsShadowPath.eq(2), 0.3, {strokeDashoffset: 0, delay: 0.4}),
                        TweenMax.to(shirtsShadowPath.eq(3), 0.3, {strokeDashoffset: 0, delay: 0.5}),
                        TweenMax.to(shirtsShadowPath.eq(4), 0.3, {strokeDashoffset: 0, delay: 0.8}),
                            //M
                        TweenMax.to(shirtsShadowPath.eq(5), 0.3, {strokeDashoffset: 0, delay: 1.2}),
                        TweenMax.to(shirtsShadowPath.eq(6), 0.3, {strokeDashoffset: 0, delay: 1.5}),
                        TweenMax.to(shirtsShadowPath.eq(7), 0.3, {strokeDashoffset: 0, delay: 1.8}),
                        TweenMax.to(shirtsShadowPath.eq(8), 0.3, {strokeDashoffset: 0, delay: 2.1}),
                        //I
                        TweenMax.to(shirtsShadowPath.eq(9), 0.3, {strokeDashoffset: 0, delay: 2.4}),
                        //S
                        TweenMax.to(shirtsShadowPath.eq(10), 0.3, {strokeDashoffset: 0, delay: 2.7}),
                        TweenMax.to(shirtsShadowPath.eq(11), 0.3, {strokeDashoffset: 0, delay: 2.9}),
                        TweenMax.to(shirtsShadowPath.eq(12), 0.3, {strokeDashoffset: 0, delay: 3.2}),
                        //A
                        TweenMax.to(shirtsShadowPath.eq(13), 0.3, {strokeDashoffset: 0, delay: 3.5}),
                        TweenMax.to(shirtsShadowPath.eq(14), 0.3, {strokeDashoffset: 0, delay: 3.7}),
                        TweenMax.to(shirtsShadowPath.eq(15), 0.3, {strokeDashoffset: 0, delay: 4.0}),
                        TweenMax.to(shirtsShadowPath.eq(16), 0.3, {strokeDashoffset: 0, delay: 4.3}),
                        //S
                        TweenMax.to(shirtsShadowPath.eq(17), 0.3, {strokeDashoffset: 0, delay: 4.6}),
                        TweenMax.to(shirtsShadowPath.eq(18), 0.3, {strokeDashoffset: 0, delay: 4.9}),
                        TweenMax.to(shirtsShadowPath.eq(19), 0.3, {strokeDashoffset: 0, delay: 5.1}),     

                ]);
                tlCamisas.restart();
            }
        }else{ 
            if (BrowserDetect.browser == "Explorer") {
                resetAnimTxt( $('#shirts_text'));
                resetShadow($('#shirts_shadow'));
                tlCamisasHex.restart();
            }else{
                tlCamisas.restart();
                tlCamisasHex.restart();
            }
        }
         }, {
           offset: '50%'
         });


       $('#shirts').waypoint(function() {
        usCounter++;
         console.log("shirt us" + usCounter);
         if (usCounter == 1) {
            }else{
                if (usCounter%2!=0) {
                    if (BrowserDetect.browser == "Explorer") {
                        resetAnimTxt( $('#us_text'));
                        resetShadow($('#shadows'));
                        tlTiendaHex.restart();
                    }else{
                        tlTienda.restart();
                        tlTiendaHex.restart();
                    }
                }
            }
         }, {
           offset: '80%'
         });

        var contactCounter = 0;
       $('#contact').waypoint(function() {
         console.log("contact");
         contactCounter++;
             if (contactCounter == 1) {
                tlContact.add([
                            TweenMax.to(ctUpPath.eq(0), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctUpPath.eq(1), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctUpPath.eq(2), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctUpPath.eq(3), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctUpPath.eq(4), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctUpPath.eq(5), 1, {strokeDashoffset: 0, delay: 0.0}),

                            TweenMax.to(ctDownPath.eq(0), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctDownPath.eq(1), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctDownPath.eq(2), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctDownPath.eq(3), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctDownPath.eq(4), 1, {strokeDashoffset: 0, delay: 0.0}),
                            TweenMax.to(ctDownPath.eq(5), 1, {strokeDashoffset: 0, delay: 0.0}),
                           
                ]);
                tlContact.restart();
             }else{
                tlContact.restart();
             }
         }, {
           offset: '50%'
         });

       $('#contact').waypoint(function() {
        shirtsCounter++;
         console.log("contact shirts" + shirtsCounter);
         if (shirtsCounter == 1) {
            }else{
                if (shirtsCounter%2!=0) {
                    if (BrowserDetect.browser == "Explorer") {
                        resetAnimTxt( $('#shirts_text'));
                        resetShadow($('#shirts_shadow'));
                        tlCamisasHex.restart();
                    }else{
                        tlCamisas.restart();
                        tlCamisasHex.restart();
                    }
                }
            }
         }, {
           offset: '80%'
         });

    });
   
</script>
