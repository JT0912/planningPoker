  var numberOfPlayers = 4;
  var currentPlayer = 1;
  var selectedPlayer = "player" + currentPlayer;
  var playerArray = [];

//Sets a card into the selected player's slot
  function setCard(x){
    if (playerArray.length < numberOfPlayers){
        playerArray[currentPlayer - 1] = x;
      document.getElementById(selectedPlayer).innerHTML = "✔";
      //Reveals cards
      if (playerArray.length == numberOfPlayers){
        reveal();
      }
    }
    //display the array to screen REMOVE LATER
    document.getElementById("arrayList").innerHTML = playerArray;
  }

  function reveal() {
    for (var i = 0; i < playerArray.length; i++){
      showCard = "player" + (i+1);
      if (playerArray[i] == 1){
        document.getElementById(showCard).innerHTML = "1";
      }
      else if (playerArray[i] == 2){
        document.getElementById(showCard).innerHTML = "2";
      }
      else if (playerArray[i] == 3){
        document.getElementById(showCard).innerHTML = "3";
      }
      else if (playerArray[i] == 4){
        document.getElementById(showCard).innerHTML = "5";
      }
      else if (playerArray[i] == 5){
        document.getElementById(showCard).innerHTML = "8";
      }
      else if (playerArray[i] == 6){
        document.getElementById(showCard).innerHTML = "13";
      }
      else if (playerArray[i] == 7){
        document.getElementById(showCard).innerHTML = "∞";
      }
      else if (playerArray[i] == 8){
        document.getElementById(showCard).innerHTML = "?";
      }
    }
  }
    var players = ['John', 'Justin', 'Tim', 'David'];

    players.forEach(function(player){
        var playerNum = 1;
        var ul = document.createElement('ul');
        document.getElementById("cardDisplay").appendChild(ul);
        var cardli = document.createElement('li');
        var playerli = document.createElement('li');
        cardli.setAttribute("class", "displayCard");
        cardli.setAttribute("id", "player"+playerNum);
        playerli.setAttribute("class", "displayName");
        ul.appendChild(cardli);
        ul.appendChild(playerli);
        playerli.innerHTML += player;
        cardli.innerHTML += "";
        playerNum++;
    });
  //Used to open and close admin buttons
  function openNav() {
    document.getElementById("mySidebar").style.width = "150px";
  }

  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
  }
