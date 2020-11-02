import { Card } from 'antd';

import { ShareAltOutlined, HeartOutlined } from '@ant-design/icons';

const { Meta } = Card;

export default function AboutCard({ imageUrl, title, description }) {
  return (
    <Card
      style={{ width: '80%', margin: 'auto' }}
      cover={<img alt="example" src={imageUrl} />}
      actions={[
        <HeartOutlined key="setting" style={{ color: 'red' }} />,
        <ShareAltOutlined key="edit" style={{ color: 'blue' }} />
      ]}
    >
      <Meta title={title} description={description} />
    </Card>
  );
}
