<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>menu-responsive</title>
</head>
<body>
    <nav>
        <div class="logo">DEV Front-End</div>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul>
            <li><a href="#">Home</a></li>

            <li>
                <label for="btn-1" class="show">Features +</label>
                <input type="checkbox" id="btn-1">
                <a href="#">Features</a>
                <ul>
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">Elements</a></li>
                    <li><a href="#">Icons</a></li>

                </ul>
            </li>
            <li>
                <label for="btn-2" class="show">Services +</label>
                <a href="#">Services</a>
                <input type="checkbox" id="btn-2">
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">App Design</a></li>

                    <li>
                        <label for="btn-3" class="show">More +</label>
                        <a href="#">More
                            <span class="fa fa-plus"></span>
                        </a>
                        <input type="checkbox" id="btn-3">
                        <ul>
                            <li><a href="#">Submenu-1</a></li>
                            <li><a href="#">Submenu-2</a></li>
                            <li><a href="#">Submenu-3</a></li>
                        </ul>

                        </li>
                </ul>

            </li>
            <li><a href= "#">Portfolio</a></li>
            <li><a href= "#">Contact</a></li>
        </ul>
    </nav>
    
</body>
</html>