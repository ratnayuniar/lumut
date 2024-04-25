
        <form action="<?php echo site_url('Post/simpan') ?>" method="post" role="form">
            <label for="">Title</label>
            <input type="text" name="title"><br>
            <label for="">Content</label>
            <input type="text" name="content"><br>
            <label for="">Date</label>
            <input type="date" name="date"><br>
            <label for="">Username</label>
            <input type="text" name="username"><br>
            <button type="submit" >Simpan</button>
        </form>