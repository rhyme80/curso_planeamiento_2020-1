import { Typography, Row, Col, Card, Divider } from 'antd';

import LayoutApp from './components/layout';
import MainTitle from './components/main-title';

const { Title } = Typography;

const productos = [
  {
    name: 'iPhone',
    imageUrl:
      'https://cnet1.cbsistatic.com/img/EQsnUwK8IXWaG2WbLpB3DBcwYU4=/470x353/2019/11/07/7545a3c8-aa2c-4bc7-8752-81b3e7589072/iphone-12-display-camera.jpg'
  },
  {
    name: 'iPad',
    imageUrl: 'https://i.blogs.es/e1a472/que-ipad-comprar/450_1000.jpg'
  },
  {
    name: 'iMac',
    imageUrl:
      'https://cnet3.cbsistatic.com/img/op2QRQQhhINLa7Iu3dpg24Hxons=/1200x675/2017/12/13/86f84dd4-18f8-4bc2-9362-df1df2ab4f78/01-apple-imac-pro.jpg'
  },
  {
    name: 'MacBook Pro',
    imageUrl:
      'https://i.blogs.es/67b0e2/analisis-macbook-pro-13-2020-applesfera-06/450_1000.jpg'
  },
  {
    name: 'iOS',
    imageUrl: 'https://i.blogs.es/c38e85/portada/450_1000.jpg'
  },
  {
    name: 'Apple TV',
    imageUrl:
      'https://d500.epimg.net/cincodias/imagenes/2020/05/08/smarttv/1588929318_886565_1588929394_noticia_normal.jpg'
  }
];

export default function Productos() {
  return (
    <LayoutApp title="Apple - Productos" current="productos">
      <Typography style={{ marginBottom: '30px' }}>
        <MainTitle title="Productos" />
      </Typography>
      <Row>
        {productos.map(producto => (
          <Col
            xs={{ span: 5, offset: 1 }}
            lg={{ span: 6, offset: 2 }}
            style={{ marginBottom: '20px' }}
          >
            <Card
              hoverable
              style={{ width: 300 }}
              cover={
                <img
                  height={400}
                  style={{ objectFit: 'cover', padding: '1rem' }}
                  alt={producto.name}
                  src={producto.imageUrl}
                />
              }
            >
              <Title level={5}>{producto.name}</Title>
            </Card>
          </Col>
        ))}
      </Row>
      <Divider />
    </LayoutApp>
  );
}
