async function onSignIn(User)
{
    // const profile = User.getBasicProfile();
    // const email = profile.getEmail();
    // console.log("cualquiercosa");
    const email='mirna.espinozaanzora@gmail.com';
    const body = {
        method: 'POST',
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({email})
    }

    const resp = await fetch('google.php', body);
    const dataJson = resp.json();

    dataJson.then( data => {
        if(data.error)
        {
            swal({title: `Advertencia`, text: `${data.error}`, icon: `warning`, button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false})
        }
        else
        {
            location.href = data.location;
        }
    })
    .catch( err => console.log(err));
}


