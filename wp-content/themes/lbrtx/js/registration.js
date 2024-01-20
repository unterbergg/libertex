document.addEventListener( 'DOMContentLoaded', ( e ) => {

  const myLanding = fxcLanding.create(
    {
    form: "#my-form",
    apiKey: "5efdfdae3efff07bdb11f2d9c689482091684e1c",
    iframe: '_self',
    registrationCallback: function (data, next) {
        console.log('Success!', data);
        next()
    }

  });

} );
