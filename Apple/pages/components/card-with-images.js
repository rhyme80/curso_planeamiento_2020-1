import { Typography, Card } from 'antd';
import React from 'react';

const { Paragraph, Title } = Typography;

export default function CardWithImages({
  title,
  description,
  Image,
  children
}) {
  return (
    <Card hoverable style={{ width: '100%', marginBottom: '50px' }}>
      <div style={{ display: 'flex', justifyContent: 'space-between' }}>
        <div style={{ width: '60%', borderRight: '1px solid rgba(0,0,0,0.3)' }}>
          <Title level={4}>{title}</Title>
          <Paragraph style={{ width: '70%' }}>{description}</Paragraph>
          {children}
        </div>
        <div style={{ width: '35%' }}>{Image}</div>
      </div>
    </Card>
  );
}
