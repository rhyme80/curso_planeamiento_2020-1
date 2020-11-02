import { List } from 'antd';
import { CheckCircleOutlined } from '@ant-design/icons';
import React from 'react';

export default function ListCheck({ data, width = '50%' }) {
  return (
    <List
      size="small"
      dataSource={data}
      style={{ width }}
      renderItem={item => (
        <List.Item>
          <CheckCircleOutlined style={{ color: '#2ecc71' }} /> {item}
        </List.Item>
      )}
    />
  );
}
