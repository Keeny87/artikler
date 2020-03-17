I eksemplet er der installeret wamp server, hvor der lyttes på port 3000

-- Henting af alle artikler --
curl http://localhost:3000/getallarticles.php

-- Hentning af specifik artikel ud fra paramater --
curl http://localhost:3000/getarticledetails.php?Årstal=2015

-- Oprettelse af ny artikel --
curl http://localhost:3000/createarticle.php?Forfatter=jens&Overskrift=nyheder&Tekst=Oprettelse&Årstal=2015
