<?php include './Components/Navbar/Navbar.php' ?>
<?php include './Shared/connection.php'; ?>


<!DOCTYPE html>
<html>
<title>eCooking | Dobrodošli </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@100&display=swap" rel="stylesheet">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            const data = google.visualization.arrayToDataTable([
                ['Task', 'Sati na dan'],
                ['Kuvanje', 11],
                ['Učenje', 2],
                ['Vežbanje', 2],
                ['Spavanje', 7]
            ]);

            const options = {
                is3D: true,
            };

            const chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth !important;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 8px;
            overflow-x: hidden;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif !important;
            min-height: 100%;
        }

        .banner {
            width: 100%;
            height: 500px;
            margin-top: 1%;
            border-radius: 10px;
            background-image: url('../WebProgramiranje/Resources/banner.jpg');
            background-size: 100% 100%;
        }
        

        .text-title {
            background-color: white;
            color: black;
            width: 400px;
            position: absolute;
            top: 200px;
            border: 2px dashed black;
            border-radius: 30px;
            left: 120px;
            height: auto;
            padding: 3%;
            align-items: center;
        }

        .registrujte-se {
            outline: none;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 12px;
            font-weight: 700;
            color: hsl(0, 0%, 100%);
            border-radius: 10px;
            text-transform: uppercase;
            transition: all 0.2s ease-in-out;
            position: relative;
            background-color: green;
            box-shadow: rgba(233, 30, 99, 0.5);
        }

        .sekcija {
            padding: 1%;
            overflow: hidden;
        }

        .card {
            width: 400px;
            height: auto;
            padding: 2%;
            background: #171717;
            transition: 1s ease-in-out;
            clip-path: polygon(30px 0%, 100% 0, 100% calc(100% - 30px), calc(100% - 30px) 100%, 0 100%, 0% 30px);
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
            display: flex;
            flex-direction: column;
        }

        .card span {
            font-weight: bold;
            color: white;
            text-align: center;
            display: block;
            font-size: 1em;
        }

        .card .info {
            font-weight: 400;
            color: white;
            display: block;
            text-align: center;
            font-size: 0.72em;
            margin: 1em;
        }

        .card .img {
            width: 4.8em;
            height: 4.8em;
            background: white;
            border-radius: 15px;
            margin: auto;
        }

        .card .share {
            margin-top: 1em;
            display: flex;
            justify-content: center;
            gap: 1em;
        }

        .card a {
            color: white;
            transition: .4s ease-in-out;
        }

       
    </style>
</head>

<body>
    <div class="glavni-div d-flex flex-column p-0 m-0">
        <!-- Banner -->
        <div class="banner d-flex jumbotron jumbotron-fluid">
            <div class="text-title">
                <h4>Želite li da postanete kuvar ili kuvarica?</h4>
                <p>Na pravom ste mestu!</p>
                <a href="/WebProgramiranje/./Components/Registration/Register.php"><button class="registrujte-se">Registrujte se</button></a>
            </div>
        </div>
        <h1 style="margin: auto; padding-top: 2%;">eCooking</h1><br />
        <div class="tekst-neki d-flex flex-row w-100 p-5 m-3 justify-content-center text-center">
            
            <iframe src="https://giphy.com/embed/Buva2aomcuXBAD07PC" width="10%" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/kitchen-chopped-kinrose-Buva2aomcuXBAD07PC"></a></p>
            <p style="margin: 2%; padding: 4%;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis ducimus quae fugiat non voluptatibus odit esse, nam nulla necessitatibus optio tempore ab nostrum minima repudiandae facere ex est laboriosam perspiciatis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum obcaecati minus illum doloremque iure eligendi reprehenderit dolorem numquam, nemo eum unde? Labore error voluptate harum dolorum in sapiente! Labore, esse.
                Illo voluptatem quibusdam, libero quod reiciendis odio beatae placeat eaque adipisci, aliquam vel, soluta doloribus ad sit fugit perspiciatis eos obcaecati ex facilis veniam impedit. Ut laboriosam mollitia numquam officia!
                Inventore quaerat cumque libero molestiae adipisci perferendis? Modi expedita tempora at quos unde cum officia facilis! Commodi, eos! Iusto, voluptate nemo? Deserunt ut illum reprehenderit eaque? Qui quidem ullam deleniti!
                Modi nesciunt vitae voluptatibus sed, distinctio quidem aperiam, facilis pariatur atque officiis mollitia enim consectetur iure voluptates ad assumenda fuga. Voluptatibus qui sequi quisquam illo rem dolore autem voluptatum exercitationem.
                Explicabo iste voluptas in aperiam quam ratione dolorem dolores. Officia repellendus possimus, eaque dignissimos reiciendis molestias ea aliquid delectus earum voluptatibus nobis laborum ipsam necessitatibus enim dolores nisi. Voluptatibus, delectus!
                Laborum expedita laboriosam molestiae aspernatur eos est doloremque, illo aliquid voluptates repellat dicta accusantium quam. Nemo quasi libero, incidunt nisi optio iure maiores ex vel doloribus dolorem vero, id ea?
                Accusantium iusto magni exercitationem ab odit sed optio odio quod officiis nulla, consequuntur numquam ex quam. Amet maiores corporis incidunt consectetur iste deserunt aut earum blanditiis saepe, provident ratione impedit.
                Qui blanditiis voluptatum vel, illum molestiae saepe quibusdam aspernatur nobis esse totam voluptate doloribus, deserunt amet dolorum. Amet tempore inventore illum odit veritatis aperiam reprehenderit sint sunt labore! Assumenda, harum.
                Ipsum excepturi, iure ipsa vero nostrum, debitis expedita quae rerum ducimus molestiae rem nisi! Unde, quaerat. Eligendi ducimus dicta dolore praesentium officia accusantium, rerum, minima ipsum deleniti hic non cum?
                Vero cumque eligendi modi. Modi, rerum. Doloremque iste eveniet dolorum sunt reiciendis. Architecto rerum accusantium modi corporis doloremque harum sit itaque laboriosam! Ipsa illum voluptatum omnis architecto, accusantium quia eius!
            </p>
              
        </div>
        <div class="chart d-flex flex-row justify-content-start w-100 p-0 m-3">
            
            <p style="width: 50%; padding: 3%;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis eveniet quos magnam nobis vitae? Reiciendis neque, exercitationem laborum tempora aliquam mollitia inventore accusamus enim est, ad sed facilis commodi doloribus!<br/>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident impedit ipsa nesciunt fuga aliquam magni iusto nihil sint error. Reprehenderit reiciendis veritatis quisquam repellendus ducimus corporis, alias distinctio ipsum non!
            Pariatur, aut numquam! Tempora, tempore soluta? Unde quod quos, alias autem facilis laborum illo ea delectus accusantium sed vel beatae nisi ex culpa hic corporis harum dolores. Impedit, placeat dicta.
            Dolore, quod illum aliquam est explicabo debitis aspernatur velit, esse quae libero dolor reiciendis autem magni beatae? Fugiat eaque eligendi reiciendis, non possimus quasi maxime id veniam soluta, quas quo?
            Autem quis dignissimos facere expedita. Dolore molestias repellendus fugit quidem. Quos minima labore voluptate unde minus maxime saepe dolorem aperiam, facilis non vel eligendi quaerat veritatis excepturi consequatur perferendis nam!
            Voluptatibus possimus omnis nostrum ipsum, cumque ab laborum necessitatibus inventore eveniet, impedit consequatur pariatur ea illo ut autem aliquam perspiciatis veritatis hic, quidem voluptatem temporibus itaque nobis earum rerum. Fugit!
            Fugit est obcaecati nobis commodi. Dignissimos excepturi, veniam delectus vero itaque voluptate. Et obcaecati eveniet at. Voluptates alias nulla voluptatem qui optio minus debitis, omnis aut eligendi, iste illum. Nihil.
            Quidem aut esse tenetur debitis delectus, praesentium possimus pariatur laboriosam modi quos cumque placeat expedita inventore iure ea accusamus maxime id, non fuga minus distinctio corporis a deleniti libero? Veritatis.
            Omnis pariatur delectus odio officiis, hic, consequuntur enim harum placeat facilis fugit ut corporis quaerat! Autem ea expedita doloribus perferendis mollitia. Suscipit impedit dignissimos sit eaque, laborum sunt maxime earum.
            Molestiae, consequatur, iusto modi labore tempora necessitatibus nobis, blanditiis est architecto perferendis voluptate explicabo dicta excepturi velit iure eveniet! Quo sit tempore at iusto labore dolorum harum ipsa impedit fugiat.
            Tempora porro optio, repellendus sed perspiciatis nostrum maiores magni quasi eum quis blanditiis molestias eos quibusdam dolore dolorem inventore? Possimus optio cumque odio eos eius repellat quidem assumenda quod doloribus.
        </p>
        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
        </div>
        <!-- Sekcija -->
        <h1 style="margin: auto; padding: 3%;">Kreatori sajta</h1>
        <section class="sekcija d-flex flex-row w-100 p-4 m-0 bg-white justify-content-between">
            <div class="card">
                <div class="img"></div>
                <span>Thomas Beuer</span>
                <p class="info">I’m Walter, a multidisciplinary designer who focuses on telling my clients’ stories visually, through enjoyable and meaningful experiences. I specialize in responsive websites and functional user interfaces.</p>
                <div class="share">
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                        </svg></a>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                        </svg></a>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                        </svg></a>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"></path>
                        </svg></a>
                </div>

            </div>
            <!-- drugi -->
            <div class="card">
                <div class="img"></div>
                <span>Merry Jean</span>
                <p class="info">I’m Walter, a multidisciplinary designer who focuses on telling my clients’ stories visually, through enjoyable and meaningful experiences. I specialize in responsive websites and functional user interfaces.</p>
                <div class="share">
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                        </svg></a>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                        </svg></a>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                        </svg></a>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"></path>
                        </svg></a>
                </div>

            </div>
            <!-- Treci -->
            <div class="card">
                <div class="img"></div>
                <span>David Beckham</span>
                <p class="info">I’m Walter, a multidisciplinary designer who focuses on telling my clients’ stories visually, through enjoyable and meaningful experiences. I specialize in responsive websites and functional user interfaces.</p>
                <div class="share">
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                        </svg></a>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                        </svg></a>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                        </svg></a>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"></path>
                        </svg></a>
                </div>

            </div>

        </section>
       
    </div>

</body>

</html>
<?php include './Components/Footer/footer.php'; ?>