import { Typography, Image } from 'antd';

import LayoutApp from './components/layout';
import MainTitle from './components/main-title';

const { Title } = Typography;

export default function Directivos() {
  return (
    <LayoutApp title="Apple - Estructura Organizacional" current="directivos">
      <Typography style={{ marginBottom: '50px' }}>
        <MainTitle title="Estructura Organizacional" />
      </Typography>
      <Title level={2}>Directivos Apple</Title>
      <Image width="100%" src="/organizacion-1.png" preview={false} />
      <Image width="100%" src="/organizacion-2.png" preview={false} />
    </LayoutApp>
  );
}
