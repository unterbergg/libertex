document.addEventListener( 'DOMContentLoaded', ( e ) => {

  const myLanding = fxcLanding.create(
    {
    form: "#my-form",
    apiKey: registration.apiKey,
    iframe: '_self',
    registrationCallback: function (data, next) {
        console.log('Success!', data);
        next()
    },
  });

} );
