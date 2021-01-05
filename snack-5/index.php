<?php
/*
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un
nuovo paragrafo.
*/

$loremText = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum semper ligula, ut pretium nisl placerat varius. Fusce vitae nisi eget lorem fringilla suscipit. Phasellus ac justo mattis dui ornare fermentum ullamcorper aliquam metus. Suspendisse orci quam, vulputate ultrices elit eget, facilisis molestie ante. Morbi fermentum convallis dolor, porttitor lacinia neque facilisis vel. Praesent aliquam pretium magna id interdum. Integer nec volutpat velit. Praesent sed erat et ligula convallis venenatis quis sed dolor. Cras risus leo, fermentum a tincidunt malesuada, dictum id neque. Mauris vitae magna enim. Donec interdum, lectus ac ultricies aliquam, lectus metus ullamcorper dui, in tristique felis mi sit amet nisl. Ut laoreet tortor faucibus dui elementum, eu laoreet ante accumsan. In ligula ipsum, pretium non eros a, maximus cursus sapien. Nunc a urna bibendum, consequat nunc non, rutrum erat. Pellentesque rutrum sapien quis lorem posuere, tempus dapibus dolor euismod. Vivamus sodales orci id augue ultrices porta.
Aenean turpis elit, maximus sed commodo vel, finibus non nisl. Cras non congue ex. Nam quis ultrices sem. Fusce eget tellus quam. In ut tempor mauris, vitae tempus mi. Donec quam eros, semper ut magna et, congue condimentum arcu. Vivamus ullamcorper risus non interdum accumsan. Sed porta quam eu nibh ornare, eget suscipit lacus commodo. Nullam molestie nibh in viverra luctus. Duis aliquam gravida magna eget finibus. Donec commodo ut neque vel viverra. Pellentesque malesuada, diam vel facilisis sollicitudin, est arcu facilisis enim, sit amet hendrerit orci orci ac mi. Duis ex dui, molestie et orci vel, vulputate varius erat. Sed ut sapien vel mi volutpat ultricies. Sed ut pretium purus, a convallis mauris. Morbi ornare, nulla nec dictum gravida, massa est aliquet arcu, ut molestie arcu dolor vitae neque. Nunc volutpat, arcu sit amet accumsan congue, felis sapien consequat urna, in interdum magna quam sit amet felis. Aenean et vulputate nunc. Pellentesque imperdiet sollicitudin erat, luctus cursus nibh auctor quis. Vivamus a libero nibh. Duis in efficitur ligula, non pellentesque dolor.
Donec lacinia neque vitae augue suscipit, eu gravida mauris rutrum. Nunc pellentesque pretium varius. Suspendisse augue orci, sodales vel aliquet at, blandit non elit. Nunc mi risus, commodo in massa et, consequat viverra quam. Quisque volutpat, libero non malesuada molestie, risus lectus convallis arcu, eu euismod ipsum ex id lacus. Etiam in odio in tortor malesuada porta. Suspendisse a magna viverra neque finibus pharetra. Nunc nec quam nec nulla ornare dapibus. Sed dictum facilisis lacinia. Praesent sit amet leo a lorem mollis congue. Ut vel semper tortor, vel blandit nibh. Sed at lorem eget ex lobortis convallis. Aenean faucibus, ex at elementum rutrum, augue nunc viverra arcu, aliquet consectetur risus magna vel dui.";

$loremParagraphs = explode(".", $loremText);
array_pop($loremParagraphs);
?>

<?php foreach($loremParagraphs as $paragraph){
    echo "<p>" . $paragraph . "." . "</p>";
}
?>