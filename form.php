<html>
  <head>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>

.error {
  border: 2px solid red;
}
    </style>
  </head>

<body>

<?php
if (!empty($messages)) {
  print('<div id="messages">');
  // Р’С‹РІРѕРґРёРј РІСЃРµ СЃРѕРѕР±С‰РµРЅРёСЏ.
  foreach ($messages as $message) {
    print($message);
  }
  print('</div>');
}
?>
 <div id="main-aside-wrapper">
    <div id="cont" class="container">
      <div id="forma" class="col-12 order-lg-3 order-sm-2">
          
    <form action=" " method="POST" name="form" id="form">

	    <p><strong>Р?РјСЏ</strong></p>
            <p><input type="text" size = "32" name="name" <?php if ($errors['name']) {print 'class="error"';} ?> value="<?php print $values['name']; ?>" ></p>

        
	    <p><strong>E-mail</strong></p>
            <p><input type = "email" size = "32" <?php if ($errors['email']) {print 'class="error"';} ?> value = "<?php print $values['email']; ?>" name = "email"></p>
		
        
	    <p><strong>Р”Р°С‚Р°</strong></p>
            <p><input name="date" type = "date" <?php if ($errors['date']) {print 'class="error"';} ?> value = "<?php print $values['date']; ?>"></p>

        
	    <p><strong>РџРѕР»</strong></p>
        <p>
        <label><input type = "radio" name = "gender" value = "M" <?php if ($errors['gender']) {print 'class="error"';} ?> <?php if ('M' === $values['gender']){print 'checked="checked"';} ?>>Рњ</label>
        <label><input type = "radio" name = "gender" value = "F" <?php if ($errors['gender']) {print 'class="error"';} ?> <?php if ('F' === $values['gender']){print 'checked="checked"';} ?> >Р–</label>
        </p>

	    <p><strong>РЎРєРѕР»СЊРєРѕ РєРѕРЅРµС‡РЅРѕСЃС‚РµР№?</strong></p>
            <p>
                <label><input type = "radio" name = "limbs" value = "1"  <?php if ($errors['limbs']) {print 'class="error"';} ?> <?php if ('1' === $values['limbs']){print 'checked="checked"';}  ?> >1</label>
                <label><input type = "radio" name = "limbs" value = "2"  <?php if ($errors['limbs']) {print 'class="error"';} ?> <?php if ('2' === $values['limbs']){print 'checked="checked"';}  ?> >2</label>
                <label><input type = "radio" name = "limbs" value = "3"  <?php if ($errors['limbs']) {print 'class="error"';} ?> <?php if ('3' === $values['limbs']){print 'checked="checked"';}  ?>>3</label>
                <label><input type = "radio" name = "limbs" value = "4" <?php if ($errors['limbs']) {print 'class="error"';} ?> <?php if ('4' === $values['limbs']){print 'checked="checked"';}  ?>>4</label>
                <label><input type = "radio" name = "limbs" value = "more"  <?php if ($errors['limbs']) {print 'class="error"';} ?> <?php if ('more' === $values['limbs']){print 'checked="checked"';}  ?>>Р±РѕР»СЊС€Рµ</label>
            </p>
		
	     <p><strong>РЎРІРµСЂС…СЃРїРѕСЃРѕР±РЅРѕСЃС‚Рё</strong></p>
	         
        <label>
            <select name="strenght[]" multiple=multiple>
              <option value="1" <?php if ($errors['strenght']) {print 'class="error"';} ?>
            <?php
              $arr = str_split($values['strenght']);
              foreach($arr as $el)
                if ($el == 1)
                  print 'selected';
            ?>
              >Р‘РµСЃСЃРјРµСЂС‚РёРµ</option>
              <option value="2" <?php if ($errors['strenght']) {print 'class="error"';} ?>
              <?php
              $arr = str_split($values['strenght']);
              foreach($arr as $el)
                if ($el == 2)
                  print 'selected';
            ?>
              > РџСЂРѕС…РѕР¶РґРµРЅРёРµ СЃРєРІРѕР·СЊ СЃС‚РµРЅС‹</option>
              <option value="3" <?php if ($errors['strenght']) {print 'class="error"';} ?>
              <?php
              $arr = str_split($values['strenght']);
              foreach($arr as $el)
                if ($el == "3")
                  print 'selected';
            ?>
              >Р›РµРІРёС‚Р°С†РёСЏ</option>
              <option value="4" <?php if ($errors['strenght']) {print 'class="error"';} ?>
              <?php
              $arr = str_split($values['strenght']);
              foreach($arr as $el)
                if ($el == "4")
                  print 'selected';
            ?>
              >Web</option>
            </select>
          </label>
		
	    
	    <p><strong>Р‘РёРѕРіСЂР°С„РёСЏ</strong></p>
            <p> <textarea name="comment" maxlength="200" <?php if ($errors['comment']) {print 'class="error"';} ?>><?php print $values['comment']; ?></textarea></p>

 		<p><input name="check"  type = "checkbox"   value = "yes" <?php if ($errors['check']) {print 'class="error"';} ?> <?php if ('yes'===$values['check']) {print 'checked="checked"';} ?>>РћР·РЅР°РєРѕРјР»РµРЅ(-Р°) СЃ РїСЂР°РІРёР»Р°РјРё РїРѕР»СЊР·РѕРІР°РЅРёСЏ</p>
                <p><input name="confirm"  type = "submit"  value = "РћС‚РїСЂР°РІРёС‚СЊ"></p>
        </form>
        </div>
     </div>
    </div>
    <footer>
    </footer>
  </body>
</html>
