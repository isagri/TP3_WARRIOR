<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
      public static function createMyWarrior() {
        $guerrier = new PokemonWarrior($GLOBALS['warriorID']);
        $weapon = new Weapon('nunchaku',10); 
        $weapon->SetImageUrl('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNbb_IpvytfawIbZAfhkh1aOrtr0v9gT5TITTT4K-9k6wYED3w');
        $guerrier->setweapon($weapon);
        $guerrier->setImageUrl('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZveRNhXVxhDfdDbCWZp-WPWX5pKz4XSgo5BcVzOte_CQ3de2piQ');
        $guerrier->saveNew();
      }

      public static function createOtherWarrior() {
        $guerrier = new PokemonWarrior('le Méchant');
        $weapon = new Weapon('arc',10); 
        $weapon->SetImageUrl('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCdHw3e9Sfzk3quQvQAD-xfy9_i7FVir_Efy7xoWxD54aWcMys');
        $guerrier->setweapon($weapon);
        $guerrier->setImageUrl('http://image.jeuxvideo.com/medias-md/150399/1503994693-5390-card.jpg');
        $guerrier->saveNew();
      }


    }
