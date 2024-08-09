let nview = "RotationTimer";

  function cokeScene() {

    nview = 'RotationTimer'

    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
  }

  function spriteScene() {

    nview = 'SpriteRotationTimer'

    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
  }

  function pepperScene() {
    nview = 'PepperRotationTimer'

    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
  }

  //var spinning = false;

  function spin_bk() {
    spinning = !spinning;
    document.getElementById('model__'+nview+axis).setAttribute('enabled', spinning.toString());
  }


let spinningX = false;
let spinningY = false;
let spinningZ = false;

function spin(axis="x") {

   stopRotation()

  let timerId;
  let spinning;

  switch(axis) {
    case 'x':
      timerId = 'model__'+nview+'X';
      spinning = spinningX = !spinningX;
      break;
    case 'y':
      timerId = 'model__'+nview+'Y';
      spinning = spinningY = !spinningY;
      break;
    case 'z':
      timerId = 'model__'+nview+'Z';
      spinning = spinningZ = !spinningZ;
      break;
    default:
      console.error('Invalid axis');
      return;
  }

  console.log(timerId)

  document.getElementById(timerId).setAttribute('enabled', spinning.toString());
}


  function stopRotation_bk() {
    spinning = false;
    document.getElementById('model__'+nview).setAttribute('enabled', spinning.toString());
  }

  function stopRotation() {

  spinningX = false;
  spinningY = false;
  spinningZ = false;

  document.getElementById('model__'+nview+'X').setAttribute('enabled', 'false');
  document.getElementById('model__'+nview+'Y').setAttribute('enabled', 'false');
  document.getElementById('model__'+nview+'Z').setAttribute('enabled', 'false');

}

  function animateModel(axis = "Y") {

    const timer = document.getElementById('model__'+nview+axis);

    const isEnabled = timer.getAttribute('enabled') === 'true';

    timer.setAttribute('enabled', !isEnabled);
  }

  function wireFrame() {
    var e = document.getElementById('wire');
    if (e) {
      e.runtime.togglePoints(true);
      e.runtime.togglePoints(true);
    }
  }

 

  function cameraFront() {
    document.getElementById('model__CameraFront').setAttribute('bind', 'true');
  }

  function cameraBack() {
    document.getElementById('model__CameraBack').setAttribute('bind', 'true');
  }

  function cameraLeft() {
    document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
  }

  function cameraRight() {
    document.getElementById('model__CameraRight').setAttribute('bind', 'true');
  }

  function cameraTop() {
    document.getElementById('model__CameraTop').setAttribute('bind', 'true');
  }

  function cameraBottom() {
    document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
  }



 var lightOn = true;

function headLight()
{
  lightOn = !lightOn;
  document.getElementById('model__headlight').setAttribute('headLight', lightOn.toString());
  console.log(lightOn.toString());
}

  function omniLight() {
    lightOn = !lightOn;
    document.querySelectorAll('PointLight').forEach(light => {
      light.setAttribute('on', lightOn.toString());
    });
    console.log(lightOn.toString());
  }

  function targetLight() {
    lightOn = !lightOn;
    document.getElementById('model__directionalLight').setAttribute('on', lightOn.toString());
    console.log(lightOn.toString());
  }


