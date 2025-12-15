const fields = [
    ["", "-", "button"],
    ["name", "Naam", "text"],
    ["shirt_number", "rugnummer", "number"],
]

var playerCount = 0;

function OnLoad() {
    NewItem();
    document.getElementById("itemButton").onclick = NewItem;
}

function NewItem(name, shirt_number) {
    let player = document.createElement("tr");

    player.classList += "player";

    for (let i = 0; i < fields.length; i++) {
        let td = document.createElement("td");
        let input = document.createElement("input");

        input.setAttribute("type", fields[i][2]);
        input.setAttribute("name", "    players[" + playerCount + "][" + fields[i][0] + "]");
        input.setAttribute("placeholder", fields[i][1]);
        input.setAttribute("value", fields[i][1]);

        if (fields[i][0] == "name") {
            input.setAttribute("value", name)
        };
        if (fields[i][0] == "shirt_number") {
            input.setAttribute("value", shirt_number)
        };

        if (fields[i][2] == "button") {
            input.setAttribute("value", fields[i][1])
            input.onclick = function (e) { DeleteThis(e); };
        };

        td.appendChild(input);
        player.appendChild(td);
    }

    document.getElementById("players").appendChild(player);

    playerCount++

    player.scrollIntoView();
}

function NewItem() {
    let player = document.createElement("tr");

    player.classList += "player";

    for (let i = 0; i < fields.length; i++) {
        let td = document.createElement("td");
        let input = document.createElement("input");

        input.setAttribute("type", fields[i][2]);
        input.setAttribute("name", "    players[" + playerCount + "][" + fields[i][0] + "]");
        input.setAttribute("placeholder", fields[i][1]);
        input.setAttribute("required", "")

        if (fields[i][2] == "button") {
            input.setAttribute("value", fields[i][1])
            input.onclick = function (e) { DeleteThis(e); };
        };

        input.classList.add("player-input");

        td.appendChild(input);
        player.appendChild(td);
    }

    document.getElementById("players").appendChild(player);

    playerCount++

    player.scrollIntoView();
}

function DeleteThis(e) {
    playerCount--;
    e.target.parentNode.parentNode.remove();
}
