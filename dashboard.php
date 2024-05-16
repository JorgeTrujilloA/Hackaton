<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="dashboard-container">
        <nav class="sidebar">
            <div class="logo">
                
            </div>
            <ul>
                <li><a href="https://www.fet.edu.co">SVR-Principal</a></li>
                <li><a href="https://www.youtube.com/@yosoyfet">SVR-Datos</a></li>
                <li><a href="https://www.facebook.com/YoSoyFet">SVR-Respaldo</a></li>
                <li><a href="https://www.tiktok.com/@yosoyfetneiva">Salir</a></li>
            </ul>
        </nav>
        <div class="main-content">
            <header>
                <h1>Encuentra la pista</h1>
                <div class="user-info">
                    <img src="https://via.placeholder.com/40" alt="User Avatar">
                    <span>Admin</span>
                </div>
            </header>
            <section class="cards">

                <?php
                if(isset($_POST['username']))
                {
                ?>
                <div class="card">
                    <img src="files/_f6f5c1dc-8cc8-4f7b-93a1-ffe100fb1d48.jpeg" alt="Card Image">
                </div>
                <div class="card">
                    <img src="files/_15f972a1-6b1f-4492-a9d1-a8f883d96718.jpeg" alt="Card Image">
                </div>
                <div class="card">
                    <img src="files/_8be8e556-07b5-488e-84b7-c51f16b0e439.jpeg" alt="Card Image">
                </div>
                <div class="card">
                    <img src="files/_cbb1a72a-e057-4c34-a673-0235b26cbd87.jpeg" alt="Card Image">
                </div>
                <div class="card">
                    <img src="files/_2e136b61-6dcb-41f2-af7e-22773b3f4dc6.jpeg" alt="Card Image">
                </div>
                <div class="card">
                    <img src="files/_d8d467a8-2ed6-4528-ae0a-a8840a4bb4a4.jpeg" alt="Card Image">
                </div>
                <?php  
                } else {
                ?>
                <h1> Creo que tomaste el camino equivocado...</h1>
                <?php
                }
                ?>
            </section>
        </div>
    </div>
</body>
</html>
