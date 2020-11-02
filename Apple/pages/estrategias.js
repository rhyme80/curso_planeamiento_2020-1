import { Typography, Image, Divider } from 'antd';

import LayoutApp from './components/layout';
import MainTitle from './components/main-title';

const { Title } = Typography;

export default function Directivas() {
  return (
    <LayoutApp title="Apple - Ejes Estratégicos" current="estrategias">
      <Typography style={{ marginBottom: '50px' }}>
        <MainTitle title="Ejes Estratégicos" />
      </Typography>
      <Title level={3}>
        I. Mejora la calidad de los productos y servicios brindados para
        fidelizar a los clientes
      </Title>
      <Image width="100%" src="/estrategia-1.png" />
      <Title level={3}>
        II. Mantener una continua innovación tecnológica para desarrollar
        productos innovadores y sacarlos al mercado
      </Title>
      <Image width="100%" src="/estrategia-2.png" />
      <Title level={3}>
        III. Potenciar las capacidades del capital humano para brindar un
        servicio y producto garantizado a los clientes.
      </Title>
      <Image width="100%" src="/estrategia-3.png" />
      <Title level={3}>
        IV. Optimizar las estrategias de marketing para elevar la participación
        en el mercado.
      </Title>
      <Image width="100%" src="/estrategia-4.png" />
      <Typography style={{ marginBottom: '20px' }}>
        <MainTitle
          title="Cómo afecta a la organización la aplicación de los objetivos
        estratégicos"
        />
      </Typography>
      <Image width="100%" src="/estrategia-5.png" />
      <Divider />
    </LayoutApp>
  );
}
