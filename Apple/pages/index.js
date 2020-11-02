import { List, Avatar, Space, Typography, Divider } from 'antd';
import { LikeOutlined, StarOutlined } from '@ant-design/icons';
import React from 'react';
import LayoutApp from './components/layout';
import MainTitle from './components/main-title';

const { Title, Paragraph } = Typography;

const listData = [
  {
    title: 'Misión',
    avatar:
      'https://download.logo.wine/logo/Apple_Inc./Apple_Inc.-Logo.wine.png',
    description: 'Apple Inc.',
    content:
      'Apple se esfuerza por brindar la mejor experiencia de computación personal a estudiantes, educadores, profesionales creativos y consumidores alrededor del mundo a través de sus ofertas innovadoras de hardware, software e internet',
    extraImage: 'https://cdn.onlinewebfonts.com/svg/img_573341.png'
  },
  {
    title: 'Visión',
    avatar:
      'https://download.logo.wine/logo/Apple_Inc./Apple_Inc.-Logo.wine.png',
    description: 'Apple Inc.',
    content:
      'Ser considerados por sus clientes y aliados estratégicos como una opción viable que ofrece soluciones y servicios basados principalmente en la innovación, tecnología avanzada, servicio y calidad que supere sus expectativas, además de la creatividad que poseen a la hora de crear nuevos productos distinguiéndose de la competencia, de manera que su valor añadido sea único.',
    extraImage: 'https://cdn.onlinewebfonts.com/svg/img_504269.png'
  }
];

const IconText = ({ icon, text, style }) => (
  <Space style={style}>
    {React.createElement(icon)}
    {text}
  </Space>
);

export default function Home() {
  return (
    <LayoutApp title="Apple - Home" current="home">
      <Typography style={{ marginBottom: '50px' }}>
        <MainTitle title="Apple Inc." />
        <Paragraph>
          La compañía Apple diseña, fabrica y comercializa smartphones,
          computadoras personales, tablets, wereables y accesorios, y vende una
          variedad de software, servicios, accesorios, soluciones de redes y
          aplicaciones y contenido digital de terceros. Vende a consumidores,
          pequeñas y medianas empresas y clientes del sector salud, educación y
          gobierno a través de sus tiendas minoristas, online o de terceros. Los
          sistemas operativos, productos de hardware y servicios principales que
          Apple ofrece están listados en la Tabla
        </Paragraph>
      </Typography>
      <Divider />
      <Title level={4}>Fundamentos Estratégicos</Title>
      <List
        itemLayout="vertical"
        size="large"
        dataSource={listData}
        renderItem={item => (
          <List.Item
            key={item.title}
            actions={[
              <IconText
                icon={StarOutlined}
                style={{ color: '#f1c40f' }}
                text="156"
                key="list-vertical-star-o"
              />,
              <IconText
                icon={LikeOutlined}
                style={{ color: '#2980b9' }}
                text="156"
                key="list-vertical-like-o"
              />
            ]}
            style={{
              border: '1px solid rgba(0,0,0,0.2)',
              borderRadius: '4px',
              margin: '0px 0px 30px',
              backgroundColor: 'white'
            }}
            extra={<img width={150} alt="logo" src={item.extraImage} />}
          >
            <List.Item.Meta
              avatar={
                <Avatar
                  src={item.avatar}
                  style={{ width: '60px', height: '60px' }}
                />
              }
              title={<a href={item.href}>{item.title}</a>}
              description={item.description}
            />
            {item.content}
          </List.Item>
        )}
      />
      <Divider />
    </LayoutApp>
  );
}
