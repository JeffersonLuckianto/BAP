<html>
    <head>
        <title>SIAK - <?php echo $__env->yieldContent('title'); ?></title>
        <style>
                body {
            margin: 0;
            padding: 0;
        }
    
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            display: inline-block;
        }
    
        nav a:hover {
            background-color: red;
        }
    
        .fixed-header,
        .fixed-footer {
            width: 100%;
            position: fixed;
            background: #333;
            padding: 5px;
            color: #fff;
        }
    
        .fixed-header {
            top: 0;
        }
    
        .fixed-footer {
            bottom: 0;
            text-align: center;
        }
    
    
        .content {
            width: 100%;
            padding-top: 60px;
            padding-bottom: 50px;
        }
    
        .content p {
            line-height: 100px;
            padding: 10px;
        }
    
        </style>
    </head>
    <body>
        <div class="fixed-header">
            <a href="/">Home</a>
            <a href="/Profil">Profil</a>
            <a href="/Mahasiswa">Mahasiswa</a>
            <a href="/Matakuliah">Matakuliah</a>
        </div>
        <div class="content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <div class="fixed-footer">
            Copyright &copy; 2021
        </div>
    </body>
</html><?php /**PATH C:\xampp2\htdocs\BAP\resources\views/layouts/app.blade.php ENDPATH**/ ?>