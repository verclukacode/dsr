<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="components.css">
    <title>Todo App</title>
</head>
<body class="background" style="padding: 0; margin: 0">
<div style="display: flex; flex-direction: row; padding: 0; margin: 0">
    <!-- Sidebar -->
    <div class="rightSeparator" style="width: 20vw; height: 95vh; padding-left: 30px; padding-right: 30px; margin: 0">
        <div class="navigationDiv">
            <h1 class="titleLabel" style="color: #2A56FF; height: 45px; padding: 0;">vercluka</h1>
        </div>
        <div class="scrollableContent" style="height: calc(95vh - 110px - 30px)">
            <!-- Smart folders nav -->
            <div style="display: flex; flex-direction: row; width: 100%; height: 20px; justify-content: space-between; align-items: center; margin-bottom: 30px">
                <h2 class="sectionTitleLabel">Smart Folders</h2>
                <button class="addButton">Add</button>
            </div>
            <!-- Folders -->
            <div class="folderDiv" style="background-color: #FFFFFF">
                <img class="icon" style="margin-left: 10px; margin-right: 10px" src="Icons/house/nonSelected.png" alt="Icon">
                <h3 class="sectionTitleLabel" style="height: max-content; color: #47576F">Home</h3>
            </div>
            <div class="folderDiv" style="background-color: #FFFFFF">
                <img class="icon" style="margin-left: 10px; margin-right: 10px" src="Icons/computer/nonSelected.png" alt="Icon">
                <h3 class="sectionTitleLabel" style="height: max-content; color: #47576F">Work</h3>
            </div>
            <div class="folderDiv" style="background-color: #FFFFFF">
                <img class="icon" style="margin-left: 10px; margin-right: 10px" src="Icons/book/nonSelected.png" alt="Icon">
                <h3 class="sectionTitleLabel" style="height: max-content; color: #47576F">School</h3>
            </div>
            <div class="folderDiv" style="background-color: #FFFFFF">
                <img class="icon" style="margin-left: 10px; margin-right: 10px" src="Icons/list/nonSelected.png" alt="Icon">
                <h3 class="sectionTitleLabel" style="height: max-content; color: #47576F">Other</h3>
            </div>
            <!-- My folders nav -->
            <div style="display: flex; flex-direction: row; width: 100%; height: 20px; justify-content: space-between; align-items: center; margin-bottom: 30px; margin-top: 60px">
                <h2 class="sectionTitleLabel">My Folders</h2>
                <button class="addButton">Add</button>
            </div>
            <!-- Folders -->
            <div class="folderDiv" style="background-color: #2A56FF">
                <img class="icon" style="margin-left: 10px; margin-right: 10px" src="Icons/house/selected.png" alt="Icon">
                <h3 class="sectionTitleLabel" style="height: max-content; color: #FFFFFF">Home</h3>
            </div>
            <div class="folderDiv" style="background-color: #FFFFFF">
                <img class="icon" style="margin-left: 10px; margin-right: 10px" src="Icons/computer/nonSelected.png" alt="Icon">
                <h3 class="sectionTitleLabel" style="height: max-content; color: #47576F">Work</h3>
            </div>
            <div class="folderDiv" style="background-color: #FFFFFF">
                <img class="icon" style="margin-left: 10px; margin-right: 10px" src="Icons/book/nonSelected.png" alt="Icon">
                <h3 class="sectionTitleLabel" style="height: max-content; color: #47576F">School</h3>
            </div>
            <div class="folderDiv" style="background-color: #FFFFFF">
                <img class="icon" style="margin-left: 10px; margin-right: 10px" src="Icons/list/nonSelected.png" alt="Icon">
                <h3 class="sectionTitleLabel" style="height: max-content; color: #47576F">Other</h3>
            </div>
        </div>
    </div>
    <!-- Tasks -->
    <div class="rightSeparator" style="width: 40vw; height: 95vh; padding-left: 30px; padding-right: 30px; margin: 0">
        <div class="navigationDiv" style="display: flex; flex-direction: row; justify-content: space-between;">
            <h1 class="titleLabel" style="color: #1E2125; height: 45px; padding: 0;">Home</h1>
            <div style="display: flex; flex-direction: row">
                <button class="circle" style="margin-right: 10px; background-color: #2A56FF">
                    <img class="icon" src="Icons/plus/white.png" alt="Icon">
                </button>
                <button class="circle" style="background-color: #EBEBEB">
                    <img class="icon" src="Icons/share/black.png" alt="Icon">
                </button>
            </div>
        </div>
        <!-- Task list -->
        <div class="scrollableContent" style="height: calc(95vh - 110px - 30px)">
            <div class="folderDiv" style="background-color: #FFFFFF">
                <img class="icon" style="margin-left: 10px; margin-right: 10px" src="Icons/task/unchecked.png" alt="Icon">
                <div style="display: flex; flex-direction: column; margin-top: 5px">
                    <h3 class="sectionTitleLabel" style="height: 20px; color: #47576F">Pospravi sobo</h3>
                    <p style="height: 15px; font-size: 10px; font-family: 'Helvetica', 'Arial', sans-serif; padding: 0; margin: 0; color: #7F8EA6">22.11.2024 - 23:00</p>
                </div>
            </div>
            <div class="folderDiv" style="background-color: #EBEBEB">
                <img class="icon" style="margin-left: 10px; margin-right: 10px" src="Icons/task/checked.png" alt="Icon">
                <div style="display: flex; flex-direction: column; margin-top: 5px">
                    <h3 class="sectionTitleLabel" style="height: 20px; color: #47576F">Skuhaj večerjo</h3>
                    <p style="height: 15px; font-size: 10px; font-family: 'Helvetica', 'Arial', sans-serif; padding: 0; margin: 0; color: #7F8EA6">22.11.2024 - 23:00</p>
                </div>
            </div>
            <div class="folderDiv" style="background-color: #FFFFFF">
                <img class="icon" style="margin-left: 10px; margin-right: 10px" src="Icons/task/unchecked.png" alt="Icon">
                <div style="display: flex; flex-direction: column; margin-top: 5px">
                    <h3 class="sectionTitleLabel" style="height: 20px; color: #47576F">Odnesi smeti</h3>
                    <p style="height: 15px; font-size: 10px; font-family: 'Helvetica', 'Arial', sans-serif; padding: 0; margin: 0; color: #7F8EA6">22.11.2024 - 23:00</p>
                </div>
            </div>
            <div class="folderDiv" style="background-color: #FFFFFF">
                <img class="icon" style="margin-left: 10px; margin-right: 10px" src="Icons/task/unchecked.png" alt="Icon">
                <div style="display: flex; flex-direction: column; margin-top: 5px">
                    <h3 class="sectionTitleLabel" style="height: 20px; color: #47576F">Pokosi travo</h3>
                    <p style="height: 15px; font-size: 10px; font-family: 'Helvetica', 'Arial', sans-serif; padding: 0; margin: 0; color: #7F8EA6">22.11.2024 - 23:00</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit task -->
    <div class="rightSeparator" style="width: 40vw; height: 95vh; padding-left: 30px; padding-right: 30px; margin: 0">
        <div class="navigationDiv" style="display: flex; flex-direction: row; justify-content: space-between;">
            <div style="display: flex; flex-direction: column">
                <h1 class="titleLabel" style="color: #1E2125; height: 45px; padding: 0; margin: 0">Task</h1>
                <h2 style="height: 20px; font-size: 16px; font-weight: bold; color: #7F8EA6; font-family: 'Helvetica', 'Arial', sans-serif; padding: 0; margin: 0">Skuhaj večerjo</h2>
            </div>
            <div style="display: flex; flex-direction: row">
                <button class="circle" style="margin-right: 10px; background-color: #E5318B">
                    <img class="icon" src="Icons/trash/selected.png" alt="Icon">
                </button>
                <button class="circle" style="background-color: #2A56FF">
                    <img class="icon" src="Icons/edit/selected.png" alt="Icon">
                </button>
            </div>
        </div>
        <div class="scrollableContent" style="height: calc(95vh - 110px - 30px)">
            <p style="font-size: 20px; font-family: 'Helvetica', 'Arial', sans-serif; color: #47576F; margin: 0; padding: 0; font-weight: normal">
                Priprava okusne večerje je umetnost, ki združuje ustvarjalnost, strast in pozornost do detajlov. Predstavljajte si večer, ko se v kuhinji širi prijeten vonj svežih začimb in počasno vrenje omake. Sestavine, kot so sočno meso, sveža zelenjava in bogata mešanica začimb, se zlijejo v harmonijo okusov, ki navduši še tako zahtevne brbončice. Ne glede na to, ali pripravljate klasično domačo jed ali eksperimentirate z novimi recepti, večerja prinaša priložnost za druženje, uživanje ob hrani in ustvarjanje nepozabnih trenutkov ob mizi.
            </p>
        </div>
    </div>
</div>
</body>
</html>