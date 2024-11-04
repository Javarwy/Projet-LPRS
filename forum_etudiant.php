<!DOCTYPE html>
<html>

<style>
    .defilement {
        height: 3000px;
    }
    .popup {
        display: none;
    }
    .popup-encart {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba( 0, 0, 0, .25 )
    }
    .popup-contenu {
        position: fixed;
        top: 50%;
        left: 50%;
        padding: 25px;
        background: white;
        transform: translate(-50%, -50%)
    }

</style>

<script>
    let popupAlreadyShowed = false

    window.addEventListener('scroll', function(e) {
        if( ! popupAlreadyShowed ) {
            setTimeout( () => {
                document.getElementById('popup').style.display = 'block'
            }, 3000 )
            popupAlreadyShowed = true
        }
    });

    document.getElementById('popup-fermeture').addEventListener('click', function(e) {
        document.getElementById('popup').style.display = 'none'
    })

</script>
<div class="defilement"></div>

<div class="popup" id="popup">
    <div class="popup-encart"></div>
    <div class="popup-contenu">
        <table>
            <tr>
                <td>ID</td>
                <td>IDO</td>
                <td>IDJ</td>
                <td>IDH</td>
                <td>IDT</td>
            </tr>

            <tr>
                <td>ID</td>
                <td>IDO</td>
                <td>IDJ</td>
                <td>IDH</td>
                <td>IDT</td>
            </tr>
        </table>

        <br/>

        <a href="#" id="popup-fermeture">Fermer</a></div>
</div>
</html>