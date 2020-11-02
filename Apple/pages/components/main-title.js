import { Typography, Divider } from 'antd';
import React from 'react';

const { Title } = Typography;

export default function MainTitle({ title }) {
  return (
    <Divider>
      <Title level={2}>{title}</Title>
    </Divider>
  );
}
