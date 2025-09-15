<?php
include('../../../plantilla/head.php');
include_once __DIR__ . '/../../../breadcrumbConfig.php';
include_once __DIR__ . '/../../../breadcrumb.php';
include_once __DIR__ . "/../../../Conexion/conexion.php";
?>
<main class="container my-5">
  <h1 class="text-center mb-4">Reglamento interno de la Defensoría del Pueblo</h1>
  <hr>
  <h4 class="text-center mb-4">Municipalidad del Partido de General Pueyrredon</h4>

  <!-- Imagen destacada -->
  <div class="text-center mb-4">
    <img src="../../../plantilla/imgs/logoReglamento.jpg" alt="Defensoría del Pueblo" class="img-fluid rounded shadow" style="max-height:180px;">
  </div>
<!-- ÍNDICE ESTÉTICO -->
<nav class="mb-5 p-3 border rounded shadow-sm bg-light">
  <h2 class="h5 fw-bold mb-3 text-primary">Índice</h2>
  <ul class="list-unstyled ms-0">
    
    <!-- TÍTULO I -->
    <li class="mb-2">
      <a href="#titulo1" class="fw-semibold text-blue text-decoration-none">TÍTULO I – Naturaleza y Fines</a>
      <ul class="list-unstyled ms-3 mt-1">
        <li><a href="#art1" class="text-secondary text-decoration-none">Artículo 1º</a></li>
        <li><a href="#art2" class="text-secondary text-decoration-none">Artículo 2º</a></li>
        <li><a href="#art3" class="text-secondary text-decoration-none">Artículo 3º</a></li>
        <li><a href="#art4" class="text-secondary text-decoration-none">Artículo 4º</a></li>
        <li><a href="#art5" class="text-secondary text-decoration-none">Artículo 5º</a></li>
      </ul>
    </li>

    <!-- TÍTULO II -->
    <li class="mb-2">
      <a href="#titulo2" class="fw-semibold text-blue text-decoration-none">TÍTULO II – Del Trámite y Procedimiento</a>
      <ul class="list-unstyled ms-3 mt-1">
        <li><a href="#art6" class="text-secondary text-decoration-none">Artículo 6º</a></li>
        <li><a href="#art7" class="text-secondary text-decoration-none">Artículo 7º</a></li>
        <li><a href="#art8" class="text-secondary text-decoration-none">Artículo 8º</a></li>
        <li><a href="#art9" class="text-secondary text-decoration-none">Artículo 9º</a></li>
        <li><a href="#art10" class="text-secondary text-decoration-none">Artículo 10º</a></li>
        <li><a href="#art11" class="text-secondary text-decoration-none">Artículo 11º</a></li>
        <li><a href="#art12" class="text-secondary text-decoration-none">Artículo 12º</a></li>
        <li><a href="#art13" class="text-secondary text-decoration-none">Artículo 13º</a></li>
        <li><a href="#art14" class="text-secondary text-decoration-none">Artículo 14º</a></li>
        <li><a href="#art15" class="text-secondary text-decoration-none">Artículo 15º</a></li>
        <li><a href="#art16" class="text-secondary text-decoration-none">Artículo 16º</a></li>
        <li><a href="#art17" class="text-secondary text-decoration-none">Artículo 17º</a></li>
        <li><a href="#art18" class="text-secondary text-decoration-none">Artículo 18º</a></li>
        <li><a href="#art19" class="text-secondary text-decoration-none">Artículo 19º</a></li>
        <li><a href="#art20" class="text-secondary text-decoration-none">Artículo 20º</a></li>
      </ul>
    </li>

    <!-- TÍTULO III -->
    <li class="mb-2">
      <a href="#prueba" class="fw-semibold text-blue text-decoration-none">PRUEBA</a>
      <ul class="list-unstyled ms-3 mt-1">
        <li><a href="#art21" class="text-secondary text-decoration-none">Artículo 21º</a></li>
        <li><a href="#art22" class="text-secondary text-decoration-none">Artículo 22º</a></li>
        <li><a href="#art23" class="text-secondary text-decoration-none">Artículo 23º</a></li>
        <li><a href="#art24" class="text-secondary text-decoration-none">Artículo 24º</a></li>
        <li><a href="#art25" class="text-secondary text-decoration-none">Artículo 25º</a></li>
        <li><a href="#art26" class="text-secondary text-decoration-none">Artículo 26º</a></li>
      </ul>
    </li>

    <!-- Potestad Disciplinaria -->
    <li class="mb-2">
      <a href="#potestad" class="fw-semibold text-blue text-decoration-none">Potestad Disciplinaria</a>
      <ul class="list-unstyled ms-3 mt-1">
        <li><a href="#art27" class="text-secondary text-decoration-none">Artículo 27º</a></li>
        <li><a href="#art28" class="text-secondary text-decoration-none">Artículo 28º</a></li>
        <li><a href="#art29" class="text-secondary text-decoration-none">Artículo 29º</a></li>
      </ul>
    </li>

    <!-- Reconstrucción de Expedientes -->
    <li class="mb-2">
      <a href="#reconstruccion" class="fw-semibold text-blue text-decoration-none">Reconstrucción de Expedientes</a>
      <ul class="list-unstyled ms-3 mt-1">
        <li><a href="#art30" class="text-secondary text-decoration-none">Artículo 30º</a></li>
        <li><a href="#art31" class="text-secondary text-decoration-none">Artículo 31º</a></li>
        <li><a href="#art32" class="text-secondary text-decoration-none">Artículo 32º</a></li>
        <li><a href="#art33" class="text-secondary text-decoration-none">Artículo 33º</a></li>
        <li><a href="#art34" class="text-secondary text-decoration-none">Artículo 34º</a></li>
        <li><a href="#art35" class="text-secondary text-decoration-none">Artículo 35º</a></li>
      </ul>
    </li>

    <!-- Resoluciones y Notas -->
    <li class="mb-2">
      <a href="#resoluciones" class="fw-semibold text-blue text-decoration-none">Resoluciones y Notas</a>
      <ul class="list-unstyled ms-3 mt-1">
        <li><a href="#art36" class="text-secondary text-decoration-none">Artículo 36º</a></li>
        <li><a href="#art37" class="text-secondary text-decoration-none">Artículo 37º</a></li>
        <li><a href="#art38" class="text-secondary text-decoration-none">Artículo 38º</a></li>
        <li><a href="#art39" class="text-secondary text-decoration-none">Artículo 39º</a></li>
        <li><a href="#art40" class="text-secondary text-decoration-none">Artículo 40º</a></li>
        <li><a href="#art41" class="text-secondary text-decoration-none">Artículo 41º</a></li>
        <li><a href="#art42" class="text-secondary text-decoration-none">Artículo 42º</a></li>
      </ul>
    </li>

    <!-- TÍTULO III – Incumplimiento de Solicitudes -->
    <li class="mb-2">
      <a href="#incumplimiento" class="fw-semibold text-blue text-decoration-none">TÍTULO III – Incumplimiento de Solicitudes</a>
      <ul class="list-unstyled ms-3 mt-1">
        <li><a href="#art43" class="text-secondary text-decoration-none">Artículo 43º</a></li>
        <li><a href="#art44" class="text-secondary text-decoration-none">Artículo 44º</a></li>
        <li><a href="#art45" class="text-secondary text-decoration-none">Artículo 45º</a></li>
      </ul>
    </li>

    <!-- TÍTULO IV – Otras Disposiciones -->
    <li class="mb-2">
      <a href="#otras" class="fw-semibold text-blue text-decoration-none">TÍTULO IV – Otras Disposiciones</a>
      <ul class="list-unstyled ms-3 mt-1">
        <li><a href="#art46" class="text-secondary text-decoration-none">Artículo 46º</a></li>
        <li><a href="#art47" class="text-secondary text-decoration-none">Artículo 47º</a></li>
        <li><a href="#art48" class="text-secondary text-decoration-none">Artículo 48º</a></li>
        <li><a href="#art49" class="text-secondary text-decoration-none">Artículo 49º</a></li>
        <li><a href="#art50" class="text-secondary text-decoration-none">Artículo 50º</a></li>
        <li><a href="#art51" class="text-secondary text-decoration-none">Artículo 51º</a></li>
      </ul>
    </li>

  </ul>
</nav>

  <!-- TÍTULO I -->
  <section id="titulo1" class="bg-light p-4 rounded shadow-sm mb-4">
    <h2 class="h5 fw-bold">TÍTULO I – NATURALEZA Y FINES</h2>

    <article id="art1" class="mt-3">
      <h6 class="fw-bold">Artículo 1º</h6>
      <p class="text-align: justify">El presente Reglamento regula el funcionamiento, procedimiento y actuación de la Defensoría del Pueblo de la Municipalidad del Partido de General Pueyrredon.</p>
    </article>

    <article id="art2" class="mt-3">
      <h6 class="fw-bold">Artículo 2º</h6>
      <p class="text-align: justify">La Defensoría del Pueblo es una institución de la “democracia municipal” que goza de autonomía funcional sin recibir instrucciones de ninguna autoridad, y tiene por fin fortalecer el sistema republicano de gobierno declarado por nuestra Constitución, procurando dotar de mayor calidad institucional al estado local, y propender a la consolidación de un estado social y participativo de derecho a partir de la defensa de los derechos e intereses de los habitantes.</p>
    </article>

    <article id="art3" class="mt-3">
      <h6 class="fw-bold">Artículo 3º</h6>
      <p>La actuación de la Defensoría se rige por la Ordenanza de creación y sus modificatorias, y las que en el futuro las modifiquen o sustituyan, los principios, declaraciones, derechos y garantías que emanan de las Constituciones Nacional y Provincial, y de los Tratados Internacionales de Derechos Humanos de los que nuestro país sea parte.</p>
    </article>

    <article id="art4" class="mt-3">
      <h6 class="fw-bold">Artículo 4º</h6>
      <p>Son lineamientos de su labor:</p>
      <ol>
        <li>El control del buen funcionamiento y accionar de la administración municipal en cuanto a la legalidad, legitimidad, oportunidad, mérito y conveniencia, transparencia, eficiencia, así como el cumplimiento y aplicación de las normas vigentes.</li>
        <li>La promoción y defensa de los derechos e intereses de los habitantes y personas jurídicas por ante la actuación de los organismos públicos estatales o no estatales.</li>
        <li>Propender a la resolución alternativa de conflictos entre particulares y órganos de la administración pública central o descentralizada, entidades autárquicas, etc., a través de mediación, conciliación u otros.</li>
        <li>La generación de propuestas, sugerencias, iniciativas e inquietudes que aporten a una mejor calidad de vida de la población y a la satisfacción de sus necesidades materiales y espirituales.</li>
      </ol>
    </article>

    <article id="art5" class="mt-3">
      <h6 class="fw-bold">Artículo 5º</h6>
      <p>Son competencias y atribuciones las otorgadas por la Ordenanza de creación, las que implícitamente surjan de sus preceptos, y/o emanen de su carácter de institución vinculada al sistema democrático municipal que persigue el correcto desempeño de la administración, los límites al poder y la defensa de los derechos y garantías de los habitantes permanentes u ocasionales del Partido de General Pueyrredon que surgen de nuestro sistema constitucional y social de derecho.</p>
    </article>
  </section>

  <!-- TÍTULO II -->
  <section id="titulo2" class="bg-light p-4 rounded shadow-sm mb-4">
    <h2 class="h5 fw-bold">TÍTULO II – DEL TRÁMITE Y PROCEDIMIENTO</h2>

    <article id="art6" class="mt-3">
      <h6 class="fw-bold">Artículo 6º: Inicio de actuaciones</h6>
      <p>Las actuaciones se iniciarán a pedido del interesado, o de oficio por disposición de cualquiera de los Defensores del Pueblo.</p>
    </article>

    <article id="art7" class="mt-3">
      <h6 class="fw-bold">Artículo 7º: Recusación y excusación</h6>
      <p>Ningún Defensor es recusable, salvo que alguna norma lo determine. Son causales de excusación o recusación:</p>
      <ol>
        <li>Tener parentesco con el interesado por consanguinidad dentro del 4º grado o por afinidad hasta el 2º grado.</li>
        <li>Tener conflicto de intereses con relación al asunto o amistad íntima con el requirente.</li>
        <li>Tener enemistad manifiesta con el funcionario requerido.</li>
      </ol>
      <p>En casos en que la excusación de un Defensor generara litigio, se elevará la cuestión al Honorable Concejo Deliberante para que resuelva.</p>
    </article>

    <article id="art8" class="mt-3">
      <h6 class="fw-bold">Artículo 8º: Formas de las presentaciones</h6>
      <p>Las presentaciones podrán ser realizadas personalmente en forma verbal, por escrito o por correo electrónico. La denuncia telefónica deberá ratificarse personalmente, salvo urgencia debidamente justificada.</p>
    </article>

    <article id="art9" class="mt-3">
      <h6 class="fw-bold">Artículo 9º: Requisitos</h6>
      <p>Requisitos para las presentaciones en sede:</p>
      <ol>
        <li>Si la presentación es verbal, se labrará un acta con fecha, datos personales del denunciante, motivo y firma (o constancia si no pudiera firmar).</li>
        <li>Si la presentación es por escrito, el agente verificará los datos y se entregará constancia de recepción con fecha y número de actuación, informando al presentante sobre las atribuciones de la Defensoría y posibles vías de solución.</li>
      </ol>
    </article>

    <article id="art10" class="mt-3">
      <h6 class="fw-bold">Artículo 10º: Recepción fuera de la Defensoría</h6>
      <p>Si la queja no pudiera ser presentada en sede por motivos considerables, se tomará en el lugar donde se encuentre la parte interesada, dejando constancia.</p>
    </article>

    <article id="art11" class="mt-3">
      <h6 class="fw-bold">Artículo 11º: Denuncia con identidad reservada</h6>
      <p>Cuando exista riesgo para el presentante o terceros, se podrá iniciar la actuación con identidad reservada; los datos personales no figurarán en la actuación y serán resguardados por los Defensores.</p>
    </article>

    <article id="art12" class="mt-3">
      <h6 class="fw-bold">Artículo 12º: Constancia de recepción</h6>
      <p>Todo escrito, documento o prueba recibido deberá llevar constancia de recepción con fecha y hora suscripta por el agente que lo recibió.</p>
    </article>

    <article id="art13" class="mt-3">
      <h6 class="fw-bold">Artículo 13º: Acumulación de actuaciones</h6>
      <p>Podrán unificarse en un mismo expediente todas las presentaciones conexas que puedan tramitarse y resolverse conjuntamente, siempre que no perjudiquen la celeridad ni obstaculicen la resolución.</p>
    </article>

    <article id="art14" class="mt-3">
      <h6 class="fw-bold">Artículo 14º</h6>
      <p>La parte interesada, su representante legal, apoderado o letrado patrocinante, tendrán acceso al expediente durante todo su trámite.</p>
    </article>

    <article id="art15" class="mt-3">
      <h6 class="fw-bold">Artículo 15º</h6>
      <p>La persona que actúe en representación deberá acompañar los documentos que acrediten la calidad invocada. Excepciones: padres que actúen por sus hijos y quien actúe en nombre del cónyuge (salvo requerimiento fundado).</p>
    </article>

    <article id="art16" class="mt-3">
      <h6 class="fw-bold">Artículo 16º</h6>
      <p>Los representantes acreditarán su personería desde la primera intervención con instrumento público o acta poder con firma autenticada por el Defensor a cargo. Personas jurídicas acompañarán acta de designación de autoridades.</p>
    </article>

    <article id="art17" class="mt-3">
      <h6 class="fw-bold">Artículo 17º: Constitución y denuncia de domicilios</h6>
      <p>En la primera presentación deberá constituirse un domicilio dentro del Partido; podrán constituir un correo electrónico válido para notificaciones previo acuerdo. Se consignará número telefónico para diligencias.</p>
    </article>

    <article id="art18" class="mt-3">
      <h6 class="fw-bold">Artículo 18º</h6>
      <p>Los expedientes serán compaginados en cuerpos que no excedan de doscientas (200) fojas, salvo excepciones. Cuando haya antecedentes voluminosos se confeccionarán anexos.</p>
    </article>

    <article id="art19" class="mt-3">
      <h6 class="fw-bold">Artículo 19º</h6>
      <p>Todas las actuaciones deberán foliarse por orden correlativo; las hojas podrán utilizarse por ambas caras y se procurará evitar el uso superfluo de papel.</p>
    </article>

    <article id="art20" class="mt-3">
      <h6 class="fw-bold">Artículo 20º</h6>
      <p>Podrá acumularse en un solo escrito más de una petición si son conexas; de lo contrario, el Defensor emplazará a presentar las peticiones por separado.</p>
  </section>

  <!-- PRUEBA -->
  <section id="prueba" class="bg-light p-4 rounded shadow-sm mb-4">
    <h2 class="h5 fw-bold">PRUEBA</h2>

    <article id="art21" class="mt-3">
      <h6 class="fw-bold">Artículo 21º: Documentos</h6>
      <p>Los documentos podrán presentarse en original, copia certificada o copia simple que certificará el funcionario actuante teniendo a la vista los originales. Si la prueba no fuese suficiente, se citará al aportante para ampliarla.</p>
    </article>

    <article id="art22" class="mt-3">
      <h6 class="fw-bold">Artículo 22º</h6>
      <p>Los documentos que deban ser suscriptos por profesionales deberán estar rubricados por profesional legalmente habilitado y matriculado para ejercer en el Partido de General Pueyrredon.</p>
    </article>

    <article id="art23" class="mt-3">
      <h6 class="fw-bold">Artículo 23º: Certificaciones</h6>
      <p>Los Defensores del Pueblo están habilitados para certificar copias de escritos, documentos, resoluciones y demás piezas.</p>
    </article>

    <article id="art24" class="mt-3">
      <h6 class="fw-bold">Artículo 24º: Solicitud de informes</h6>
      <p>La solicitud de informes, documentación o vistas a entidades públicas o privadas se realizará mediante oficio suscripto por los Defensores, dejando constancia en la actuación.</p>
    </article>

    <article id="art25" class="mt-3">
      <h6 class="fw-bold">Artículo 25º: Audiencias</h6>
      <p>La realización de audiencias deberá ser dispuesta o autorizada y notificada por los Defensores.</p>
    </article>

    <article id="art26" class="mt-3">
      <h6 class="fw-bold">Artículo 26º: Inspecciones y verificaciones</h6>
      <p>Las inspecciones y verificaciones a dependencias municipales u otros sitios serán dispuestas por escrito. Para lugares que no pertenezcan a la órbita municipal se requerirá previa autorización.</p>
    </article>
  </section>

  <!-- POTESTAD DISCIPLINARIA -->
  <section id="potestad" class="bg-light p-4 rounded shadow-sm mb-4">
    <h2 class="h5 fw-bold">POTESTAD DISCIPLINARIA</h2>

    <article id="art27" class="mt-3">
      <h6 class="fw-bold">Artículo 27º</h6>
      <p>Los Defensores velarán por el decoro y buen orden de las actuaciones, pudiendo advertir a los interesados por faltas que obstruyan el trámite o afecten la dignidad y respeto. Podrán testar expresiones ofensivas consignadas en escritos y aplicar sanciones conforme al régimen municipal.</p>
    </article>

    <article id="art28" class="mt-3">
      <h6 class="fw-bold">Artículo 28º: Notificaciones</h6>
      <p>Las notificaciones podrán efectuarse personalmente o por cualquier medio que acredite su recepción. Siempre deberá notificarse la decisión que dé por concluido el trámite, salvo desistimiento.</p>
    </article>

    <article id="art29" class="mt-3">
      <h6 class="fw-bold">Artículo 29º: Plazos</h6>
      <p>Los plazos administrativos se cuentan por días hábiles, salvo disposición en contrario, computándose a partir del día siguiente a la notificación. Cuando no exista plazo especial, será de diez (10) días.</p>
    </article>
  </section>

  <!-- RECONSTRUCCIÓN DE EXPEDIENTES -->
  <section id="reconstruccion" class="bg-light p-4 rounded shadow-sm mb-4">
    <h2 class="h5 fw-bold">RECONSTRUCCIÓN DE EXPEDIENTES</h2>

    <article id="art30" class="mt-3">
      <h6 class="fw-bold">Artículo 30º</h6>
      <p>Comprobada la pérdida o extravío de un expediente, se ordenará su reconstrucción incorporando las copias y documentación que aporte el interesado. Se reproducirán las piezas posibles y, si hubo resolución, se glosará copia autenticada.</p>
    </article>

    <article id="art31" class="mt-3">
      <h6 class="fw-bold">Artículo 31º: Desistimiento</h6>
      <p>El desistimiento del interesado no obliga a la administración; por motivos de interés general la Defensoría podrá continuar con las actuaciones. Caso contrario, se dispondrá el archivo.</p>
    </article>

    <article id="art32" class="mt-3">
      <h6 class="fw-bold">Artículo 32º: Caducidad</h6>
      <p>Transcurrido un (1) año calendario desde que un procedimiento promovido por un interesado se paralice por causa imputable al mismo, se dispondrá su caducidad y archivo. Operada la caducidad, el interesado podrá pedir el desarchivo y retomar el trámite. Si existe interés general, la Defensoría continuará la tramitación.</p>
    </article>

    <article id="art33" class="mt-3">
      <h6 class="fw-bold">Artículo 33º</h6>
      <p>Los expedientes serán llevados por el Defensor que prevenga en las actuaciones; los iniciados en Mesa de Entradas serán distribuidos de común acuerdo entre los defensores según criterios a establecer.</p>
    </article>

    <article id="art34" class="mt-3">
      <h6 class="fw-bold">Artículo 34º: Confidencialidad</h6>
      <p>Todas las actuaciones administrativas, con excepción de las Resoluciones públicas, son confidenciales y no podrán divulgarse sin autorización. El personal está vedado de tomar datos para uso o beneficio personal.</p>
    </article>

    <article id="art35" class="mt-3">
      <h6 class="fw-bold">Artículo 35º: No dar curso a quejas</h6>
      <p>No se dará curso a quejas cuando exista mala fe, carencia de fundamentos, inexistencia de pretensión, objeto fútil, intencionalidad contraria al interés general, temeridad o malicia, o asuntos ya resueltos. Esto no impide investigaciones de alcance general.</p>
    </article>
  </section>

  <!-- RESOLUCIONES Y NOTAS -->
  <section id="resoluciones" class="bg-light p-4 rounded shadow-sm mb-4">
    <h2 class="h5 fw-bold">RESOLUCIONES Y NOTAS</h2>

    <article id="art36" class="mt-3">
      <h6 class="fw-bold">Artículo 36º: Resoluciones</h6>
      <p>Las decisiones adoptadas por la Defensoría tendrán forma de Resolución, registradas con número correlativo iniciando anualmente en 0001/AA. Toda resolución deberá contener fundamentos suficientes y será válida con la firma de al menos dos Defensores.</p>
    </article>

    <article id="art37" class="mt-3">
      <h6 class="fw-bold">Artículo 37º: Notas</h6>
      <p>Las notas se numerarán en un registro centralizado. Las reiteraciones conservarán la numeración originaria con la indicación correspondiente. No se numerarán las notas propias de un expediente ni las de mero trámite.</p>
    </article>

    <article id="art38" class="mt-3">
      <h6 class="fw-bold">Artículo 38º</h6>
      <p>La Defensoría podrá gestionar ante autoridades nacionales, provinciales, entidades públicas o privadas y particulares. En caso de corresponder intervención de otras Defensorías, podrá declararse incompetente y derivar actuaciones.</p>
    </article>

    <article id="art39" class="mt-3">
      <h6 class="fw-bold">Artículo 39º</h6>
      <p>Aun cuando la queja sea presentada fuera del plazo de un (1) año desde que el recurrente tomó conocimiento del hecho, podrá admitirse por excepción cuando verse sobre afectación pluriindividual vigente, conducta reiterada de la administración o afectación a un interés general.</p>
    </article>

    <article id="art40" class="mt-3">
      <h6 class="fw-bold">Artículo 40º: Principios de procedimiento</h6>
      <p>Los principios son: legalidad, razonabilidad, igualdad, informalismo a favor del administrado, amplitud probatoria, impulso de oficio, principio de instrucción, verdad material, debido proceso adjetivo, celeridad, economía procedimental, sencillez, eficacia, inmediatez e imparcialidad.</p>
    </article>

    <article id="art41" class="mt-3">
      <h6 class="fw-bold">Artículo 41º: Irrecurribilidad</h6>
      <p>Las resoluciones de la Defensoría son irrecurribles. La Defensoría podrá anular, revocar, modificar o sustituir de oficio sus propias resoluciones cuando existan motivos fundados; podrán rectificarse errores materiales o aritméticos.</p>
    </article>

    <article id="art42" class="mt-3">
      <h6 class="fw-bold">Artículo 42º: Destrucción de las actuaciones</h6>
      <p>Las actuaciones archivadas serán destruidas al término de 10 años, conforme a la Ley Orgánica de las Municipalidades. Esta diligencia dispuesta por resolución anual no será notificada ni publicada.</p>
    </article>
  </section>

  <!-- INCUMPLIMIENTO DE SOLICITUDES -->
  <section id="incumplimiento" class="bg-light p-4 rounded shadow-sm mb-4">
    <h2 class="h5 fw-bold">TÍTULO III: INCUMPLIMIENTO DE LAS SOLICITUDES DE LA DEFENSORÍA</h2>

    <article id="art43" class="mt-3">
      <h6 class="fw-bold">Artículo 43º</h6>
      <p>Se llevará un registro de los incumplimientos por parte de funcionarios respecto de solicitudes de la Defensoría, en particular cuando no remitan expedientes o no suministren informaciones en los plazos establecidos por la Ordenanza Nº 13663 y modificatorias.</p>
    </article>

    <article id="art44" class="mt-3">
      <h6 class="fw-bold">Artículo 44º</h6>
      <p>La falta grave prevista en el artículo 14 de la Ordenanza 13.663 habilitará atribuciones para hacer valer responsabilidades políticas, civiles, penales y administrativas, aplicándose los artículos 241 y 242 de la Ley Orgánica de las Municipalidades según corresponda.</p>
    </article>

    <article id="art45" class="mt-3">
      <h6 class="fw-bold">Artículo 45º</h6>
      <p>Ante falta grave, la Defensoría podrá emitir Resolución disponiendo "Llamado de atención" al funcionario, que será notificado y comunicado a la Dirección de la Función Pública, Procuración Municipal, Intendente y Concejo Deliberante, y publicada en medios informáticos de la Defensoría. Se configurará tras pedido y dos reiteraciones sin respuesta.</p>
    </article>
  </section>

  <!-- OTRAS DISPOSICIONES -->
  <section id="otras" class="bg-light p-4 rounded shadow-sm mb-4">
    <h2 class="h5 fw-bold">TÍTULO IV: OTRAS DISPOSICIONES</h2>

    <article id="art46" class="mt-3">
      <h6 class="fw-bold">Artículo 46º</h6>
      <p>La Defensoría trabaja mancomunadamente con instituciones de la sociedad civil: ONG, sociedades vecinales y colegios y consejos profesionales, considerados organismos de colaboración.</p>
    </article>

    <article id="art47" class="mt-3">
      <h6 class="fw-bold">Artículo 47º</h6>
      <p>La Defensoría podrá elaborar informes o estudios vinculados a temáticas de interés general o particular, con recomendaciones, análisis y estados de situación, para difusión pública o autoridades. Estos podrán ser reservados cuando su difusión pueda generar sensibilidad o afectar políticas de estado.</p>
    </article>

    <article id="art48" class="mt-3">
      <h6 class="fw-bold">Artículo 48º</h6>
      <p>Los colegios y consejos profesionales con actuación en el Partido son consultores naturales de la Defensoría en temas científicos y técnicos. La Defensoría integra el Foro de Consejos y Colegios Profesionales.</p>
    </article>

    <article id="art49" class="mt-3">
      <h6 class="fw-bold">Artículo 49º</h6>
      <p>La Defensoría participa activamente en foros de Defensores del Pueblo a nivel provincial, nacional, regional e internacional.</p>
    </article>

    <article id="art50" class="mt-3">
      <h6 class="fw-bold">Artículo 50º: Normas supletorias</h6>
      <p>Además de la Ordenanza de creación, este reglamento se regirá supletoriamente por la Ordenanza General Nº 267 de Procedimientos Administrativos, la Ley Orgánica de las Municipalidades, el Reglamento de Contabilidad y el Código Contencioso Administrativo de la Provincia de Buenos Aires.</p>
    </article>

    <article id="art51" class="mt-3">
      <h6 class="fw-bold">Artículo 51º</h6>
      <p>Se ratifican las facultades y funciones no enumeradas que surgen conforme al artículo 13º inciso h) de la Ordenanza, facultando a los Defensores del Pueblo para ejercer las que resulten convenientes al mejor desempeño y se ratifica la legitimación procesal del organismo.</p>
    </article>
  </section>

  <!-- Footer include -->
</main>
<?php include('../../../plantilla/footer.php'); ?>
