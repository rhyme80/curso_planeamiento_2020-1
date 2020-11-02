import Head from 'next/head';
import Link from 'next/link';
import { Menu, Layout, Typography } from 'antd';
import {
  AppleOutlined,
  AppstoreOutlined,
  MenuUnfoldOutlined,
  MenuFoldOutlined,
  DotChartOutlined,
  TableOutlined,
  BookOutlined,
  FileDoneOutlined
} from '@ant-design/icons';
import React, { useState } from 'react';

const { Header, Sider, Content } = Layout;
const { Title } = Typography;

export default function LayoutApp({ title, current, children }) {
  const [collapsed, setCollapsed] = useState(false);
  return (
    <div>
      <Head>
        <title>{title}</title>
        <link rel="icon" href="/favicon.ico" />
        <link href="image-gallery.css" rel="stylesheet" />
      </Head>
      <Layout style={{ height: '100vh' }}>
        <Sider trigger={null} collapsible collapsed={collapsed}>
          {!collapsed && (
            <Title style={{ color: 'white', padding: '10px 0px 0px 30px' }}>
              Apple
            </Title>
          )}
          <Menu theme="dark" mode="inline" selectedKeys={[current]}>
            <Menu.Item key="home" icon={<AppleOutlined />}>
              <Link href="/">Home</Link>
            </Menu.Item>
            <Menu.Item key="productos" icon={<AppstoreOutlined />}>
              <Link href="/productos">Productos</Link>
            </Menu.Item>
            <Menu.Item key="matrices" icon={<TableOutlined />}>
              <Link href="/matrices">Matrices</Link>
            </Menu.Item>
            <Menu.Item key="estrategias" icon={<DotChartOutlined />}>
              <Link href="/estrategias">Ejes Estrategicos</Link>
            </Menu.Item>
            <Menu.Item key="directivos" icon={<BookOutlined />}>
              <Link href="/directivos">Estructura Organizacional</Link>
            </Menu.Item>
            <Menu.Item key="about" icon={<AppstoreOutlined />}>
              <Link href="/about">About</Link>
            </Menu.Item>
            <Menu.Item key="conclusiones" icon={<FileDoneOutlined />}>
              <Link href="/conclusiones">Conclusiones</Link>
            </Menu.Item>
          </Menu>
        </Sider>
        <Layout className="site-layout">
          <Header
            className="site-layout-background"
            style={{
              paddingLeft: 20,
              position: 'fixed',
              width: '100%',
              zIndex: 10
            }}
          >
            {collapsed ? (
              <MenuUnfoldOutlined
                className="trigger"
                onClick={() => setCollapsed(!collapsed)}
                style={{ color: 'white', fontSize: '20px' }}
              />
            ) : (
              <MenuFoldOutlined
                className="trigger"
                onClick={() => setCollapsed(!collapsed)}
                style={{ color: 'white', fontSize: '20px' }}
              />
            )}
          </Header>
          <Content
            className="site-layout-background"
            style={{
              margin: '50px 24px 24px',
              padding: 24
            }}
          >
            {children}
          </Content>
        </Layout>
      </Layout>
    </div>
  );
}
