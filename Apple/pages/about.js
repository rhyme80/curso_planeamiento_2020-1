import { Typography, Collapse, Row, Col, Image, Divider } from 'antd';

import LayoutApp from './components/layout';
import MainTitle from './components/main-title';

const { Panel } = Collapse;

const { Paragraph, Title } = Typography;

const aboutData = [
  {
    imageUrl:
      'https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png',
    title: 'Privacidad',
    description:
      'La privacidad es un derecho humano fundamental. Y también es uno de los valores fundamentales de Apple. Sabemos lo importantes que son tus dispositivos en tu vida y creemos que sólo tú debes decidir qué compartir y con quién compartirlo. Por eso, los productos Apple están diseñados para proteger tu privacidad y ayudarte a mantener el control de tu información. No siempre es fácil, pero es el tipo de innovación en la que creemos.'
  },
  {
    imageUrl:
      'https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png',
    title: 'Accesibilidad',
    description:
      'Queremos que todas las personas disfruten de las cosas cotidianas con la ayuda de la tecnología. Por eso, trabajamos para que cada producto Apple sea accesible desde el primer momento. Porque el valor real de un dispositivo no está en cuánta potencia tiene, sino en cuánto poder te brinda.'
  },
  {
    imageUrl:
      'https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png',
    title: 'Responsabilidad con el medio ambiente',
    description:
      'Queremos algún día poder fabricar productos sin extraer más recursos del planeta. Para lograrlo, constantemente inventamos métodos de reciclaje más eficientes, reemplazamos los combustibles fósiles por energía renovable y buscamos reducir nuestro impacto medioambiental usando materiales seguros para las personas y el medio ambiente. Es un desafío, pero sabemos que podemos fabricar los mejores productos y dejar un mejor planeta que el que recibimos.'
  },
  {
    imageUrl:
      'https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png',
    title: 'Inclusión',
    description:
      'En Apple, no todos somos iguales. Y esa es nuestra mayor fortaleza. Nos basamos en las diferencias en quiénes somos, qué hemos experimentado y cómo pensamos. Porque para crear productos que sirvan a todos, creemos en incluir a todos.'
  },
  {
    imageUrl:
      'https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png',
    title: 'Educación',
    description:
      'Apple considera que la integración de la tecnología puede apoyar la enseñanza y el aprendizaje en las escuelas de alta pobreza, por ello hemos implementado un proceso que proporciona planificación, aprendizaje profesional y orientación continua para que cada escuela pueda experimentar el poder transformador de la tecnología.'
  },
  {
    imageUrl:
      'https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png',
    title: 'Responsabilidad con el proveedor',
    description:
      'En Apple, cumplir con nuestros ideales más altos requiere el mismo trabajo duro y el espíritu innovador que dedicamos a nuestros productos. Las protecciones laborales, de derechos humanos y medioambientales son la base de nuestro Código de Conducta para proveedores. Y vamos más allá para empoderar a las personas en nuestra cadena de suministro y dejar el mundo mejor de lo que lo encontramos, todo mientras trabajamos con socios para llegar allí más rápido..'
  }
];

export default function About() {
  return (
    <LayoutApp title="Apple - About Us" current="about">
      <Typography style={{ marginBottom: '50px' }}>
        <MainTitle title="About us" />
        <Row>
          <Col span={16} style={{ paddingTop: '2rem' }}>
            <Paragraph>
              Situación actual de la institución Tras la llegada de la pandemia,
              Apple cerró todas sus tiendas dando un comunicado sobre las
              acciones que tomaría, iniciando por el apoyo económico a las
              organizaciones mundiales para combatir el virus y luego,
              implantando la nueva forma de trabajo para asegurar a los
              consumidores de Apple que el buen servicio seguirá presente por
              todas las plataformas digitales. Tiempo después surgió una alianza
              con Google para facilitar la comunicación entre estas grandes
              compañías a nivel de desarrolladores, creando una API para
              facilitar esta comunicación. Cuando las medidas de confinamiento
              disminuyeron, Apple inició la reapertura progresiva de sus
              tiendas, pero actualmente, debido al nuevo rebrote de casos, se
              ven obligados a cerrar algunas tiendas, lo que deja un total de 77
              tiendas cerradas de las 271 situadas en Estados Unidos.
            </Paragraph>
          </Col>
          <Col span={8} style={{ paddingLeft: '5%' }}>
            <Image
              width="70%"
              src="https://www.gruposalinas.com/images/valores/Trabajo%20en%20equipo.png"
            />
          </Col>
        </Row>
      </Typography>
      <Title level={4}>Fundamentos Estrategicos - Valores</Title>
      <Collapse accordion>
        {aboutData.map((data, index) => (
          <Panel header={data.title} key={index}>
            <p>{data.description}</p>
          </Panel>
        ))}
      </Collapse>
      <Divider />
    </LayoutApp>
  );
}
