<?php
 $fonts = [
      'italic',
     'oblique'
 ];
 $fontfs = [
     'serif',
     'sans-serif',
     'monospace',
     'cursive',
     'fantasy',
     'system-ui'
 ];
    
 include "top.txt";
?>
<div class="row">
<div class="col-md-6">
    <form class="form-horizontal text-center">
        <select class="form-control" name="font">
            <?php foreach($fonts as $font) : ?>
            <option value="<?=  $font ?>"><?=  $font ?></option>
            <?php endforeach ?>
        </select>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
<div class="col-md-6">
    <form class="form-horizontal text-center">
        <select class="form-control " name="ffam">
            <?php foreach($fontfs as $fontf) : ?>
            <option value="<?=  $fontf ?>"><?=  $fontf ?></option>
            <?php endforeach ?>
        </select>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
<div class="row">
    <div class="col-md-4">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, suscipit repellat eius. Repellat hic aspernatur blanditiis at reiciendis, a pariatur eveniet, reprehenderit architecto suscipit minima fugiat natus sapiente exercitationem explicabo nostrum beatae nesciunt tempora? Maxime ad tempore eligendi earum neque illo nihil modi, soluta repudiandae quia nesciunt quaerat aut eius omnis quisquam numquam incidunt aliquid sint similique saepe cupiditate id facilis. Quisquam aperiam quidem iusto totam praesentium, a. Alias commodi modi nemo quidem perferendis, illum repudiandae vero totam consequuntur inventore, laborum tempora in voluptatum veniam, eum quod repellendus. Itaque qui dicta aperiam eveniet dolores voluptates nesciunt earum enim, quam laudantium eaque accusamus, doloribus error rem magni. Inventore vero soluta deserunt eum mollitia aliquam, maxime beatae accusantium. Enim impedit earum saepe at? Alias rem quod dolorum, quasi sed veniam error neque voluptatibus nam facilis id asperiores voluptates repellendus quis possimus corporis aliquam porro sint ipsa laboriosam odio sunt! Natus commodi incidunt nostrum repudiandae quas nihil expedita molestias dolor eligendi dolorum quasi, culpa cum impedit perferendis blanditiis itaque, vel est ad voluptate sint assumenda asperiores modi, illo porro omnis. Eius fuga, tempore soluta praesentium illo qui nam ipsa architecto provident odit minus harum asperiores ullam placeat nemo inventore quam sit officia voluptas.</p>
    </div>
    <div class="col-md-4">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, suscipit repellat eius. Repellat hic aspernatur blanditiis at reiciendis, a pariatur eveniet, reprehenderit architecto suscipit minima fugiat natus sapiente exercitationem explicabo nostrum beatae nesciunt tempora? Maxime ad tempore eligendi earum neque illo nihil modi, soluta repudiandae quia nesciunt quaerat aut eius omnis quisquam numquam incidunt aliquid sint similique saepe cupiditate id facilis. Quisquam aperiam quidem iusto totam praesentium, a. Alias commodi modi nemo quidem perferendis, illum repudiandae vero totam consequuntur inventore, laborum tempora in voluptatum veniam, eum quod repellendus. Itaque qui dicta aperiam eveniet dolores voluptates nesciunt earum enim, quam laudantium eaque accusamus, doloribus error rem magni. Inventore vero soluta deserunt eum mollitia aliquam, maxime beatae accusantium. Enim impedit earum saepe at? Alias rem quod dolorum, quasi sed veniam error neque voluptatibus nam facilis id asperiores voluptates repellendus quis possimus corporis aliquam porro sint ipsa laboriosam odio sunt! Natus commodi incidunt nostrum repudiandae quas nihil expedita molestias dolor eligendi dolorum quasi, culpa cum impedit perferendis blanditiis itaque, vel est ad voluptate sint assumenda asperiores modi, illo porro omnis. Eius fuga, tempore soluta praesentium illo qui nam ipsa architecto provident odit minus harum asperiores ullam placeat nemo inventore quam sit officia voluptas.</p>
    </div>
    <div class="col-md-4">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, suscipit repellat eius. Repellat hic aspernatur blanditiis at reiciendis, a pariatur eveniet, reprehenderit architecto suscipit minima fugiat natus sapiente exercitationem explicabo nostrum beatae nesciunt tempora? Maxime ad tempore eligendi earum neque illo nihil modi, soluta repudiandae quia nesciunt quaerat aut eius omnis quisquam numquam incidunt aliquid sint similique saepe cupiditate id facilis. Quisquam aperiam quidem iusto totam praesentium, a. Alias commodi modi nemo quidem perferendis, illum repudiandae vero totam consequuntur inventore, laborum tempora in voluptatum veniam, eum quod repellendus. Itaque qui dicta aperiam eveniet dolores voluptates nesciunt earum enim, quam laudantium eaque accusamus, doloribus error rem magni. Inventore vero soluta deserunt eum mollitia aliquam, maxime beatae accusantium. Enim impedit earum saepe at? Alias rem quod dolorum, quasi sed veniam error neque voluptatibus nam facilis id asperiores voluptates repellendus quis possimus corporis aliquam porro sint ipsa laboriosam odio sunt! Natus commodi incidunt nostrum repudiandae quas nihil expedita molestias dolor eligendi dolorum quasi, culpa cum impedit perferendis blanditiis itaque, vel est ad voluptate sint assumenda asperiores modi, illo porro omnis. Eius fuga, tempore soluta praesentium illo qui nam ipsa architecto provident odit minus harum asperiores ullam placeat nemo inventore quam sit officia voluptas.</p>
    </div>
</div>
</div>

<?php
 include "bottom.txt";
?>  