import { Divider, Typography } from 'antd';
import React from 'react';
import ImageGallery from 'react-image-gallery';
import LayoutApp from './components/layout';
import MainTitle from './components/main-title';
import CardWithImages from './components/card-with-images';
import ListCheck from './components/list-check';

const { Title } = Typography;

// const imagesFODA = [
//   {
//     original: 'https://i.ibb.co/NC7J66S/matriz-foda.png',
//     thumbnail: 'https://i.ibb.co/NC7J66S/matriz-foda.png'
//   }
// ];
// const imagesEFE = [
//   {
//     original: 'https://i.ibb.co/Thdbymd/matriz-efe.png',
//     thumbnail: 'https://i.ibb.co/Thdbymd/matriz-efe.png'
//   }
// ];
// const imagesEFI = [
//   {
//     original: 'https://i.ibb.co/9gXL8dx/matriz-efi-1.png',
//     thumbnail: 'https://i.ibb.co/9gXL8dx/matriz-efi-1.png'
//   },
//   {
//     original: 'https://i.ibb.co/3WzwhNd/matriz-efi-2.png',
//     thumbnail: 'https://i.ibb.co/3WzwhNd/matriz-efi-2.png'
//   }
// ];
// const imagesIE = [
//   {
//     original: 'https://i.ibb.co/bs4TMFg/matriz-ie.png',
//     thumbnail: 'https://i.ibb.co/bs4TMFg/matriz-ie.png'
//   }
// ];
// const imagesMPEC = [
//   {
//     original: 'https://i.ibb.co/PNncD6x/matriz-mpec-1.png',
//     thumbnail: 'https://i.ibb.co/PNncD6x/matriz-mpec-1.png'
//   },
//   {
//     original: 'https://i.ibb.co/Qm7yTB5/matriz-mpec-2.png',
//     thumbnail: 'https://i.ibb.co/Qm7yTB5/matriz-mpec-2.png'
//   }
// ];
// const imagesPEYA = [
//   {
//     original: 'https://i.ibb.co/d5sBLgY/matriz-peyea-1.png',
//     thumbnail: 'https://i.ibb.co/d5sBLgY/matriz-peyea-1.png'
//   },
//   {
//     original: 'https://i.ibb.co/W356Zcq/matriz-peyea-2.png',
//     thumbnail: 'https://i.ibb.co/W356Zcq/matriz-peyea-2.png'
//   }
// ];

const imagesFODA = [
  {
    original: 'matriz-foda.png',
    thumbnail: 'matriz-foda.png'
  }
];
const imagesEFE = [
  {
    original: 'matriz-efe.png',
    thumbnail: 'matriz-efe.png'
  }
];
const imagesEFI = [
  {
    original: 'matriz-efi-1.png',
    thumbnail: 'matriz-efi-1.png'
  },
  {
    original: 'matriz-efi-2.png',
    thumbnail: 'matriz-efi-2.png'
  }
];
const imagesIE = [
  {
    original: 'matriz-ie.png',
    thumbnail: 'matriz-ie.png'
  }
];
const imagesMPEC = [
  {
    original: 'matriz-mpec-1.png',
    thumbnail: 'matriz-mpec-1.png'
  },
  {
    original: 'matriz-mpec-2.png',
    thumbnail: 'matriz-mpec-2.png'
  }
];
const imagesPEYA = [
  {
    original: 'matriz-peyea-1.png',
    thumbnail: 'matriz-peyea-1.png'
  },
  {
    original: 'matriz-peyea-2.png',
    thumbnail: 'matriz-peyea-2.png'
  }
];

export default function Matrices() {
  return (
    <LayoutApp title="Apple - Matrices" current="matrices">
      <Typography style={{ marginBottom: '50px' }}>
        <MainTitle title="Matrices" />
      </Typography>
      <Title level={3}>Etapa de aportación de información</Title>
      <Divider />
      <CardWithImages
        title="EFE (Matriz de evaluación de factores externos)"
        Image={
          <ImageGallery
            showNav={false}
            showPlayButton={false}
            items={imagesEFE}
          />
        }
        description="Tras la evaluación de los factores considerados en la matriz, se
        obtuvo 2.58, el cual es un valor promedio que indica que el sector es
        atractivo, con oportunidades que se pueden aprovechar."
      />
      <CardWithImages
        title="EFI (Matriz de evaluación de factores internos)"
        Image={
          <ImageGallery
            showNav={false}
            showPlayButton={false}
            items={imagesEFI}
          />
        }
        description="Después de evaluar todos los factores dentro de la organización, la
        matriz indica que las fuerzas internas son favorables a la
        organización con 1,84 contra 0,66 de las debilidades."
      />
      <Divider />
      <Title level={3}>Etapa de Ajuste</Title>
      <Divider />
      <CardWithImages
        title="FODA (Fortalezas, Oportunidades, Debilidades, Amenazas)"
        Image={
          <ImageGallery
            showNav={false}
            showPlayButton={false}
            items={imagesFODA}
          />
        }
        description=" Esta es la matriz de análisis FODA de APPLE INC., la que nos da la
        pauta para conocer lo que se está haciendo bien y todo aquello que
        representa un reto actual o potencial."
      />
      <CardWithImages
        title="PEyEA (Matriz de posición estratégica y evaluación de la acción)"
        items={imagesPEYA}
        Image={
          <ImageGallery
            showNav={false}
            showPlayButton={false}
            items={imagesPEYA}
          />
        }
        description="Apple Inc. es una empresa sólida en el aspecto financiero que ha
        logrado ventajas competitivas importantes y cuya fortaleza industrial
        es un factor dominante. Teniendo esto en cuenta, se puede utilizar
        estas estrategias intensivas:"
      >
        <ListCheck
          data={[
            'Penetración y desarrollo del mercado.',
            'Desarrollo del producto.',
            'Integración hacia atrás, hacia adelante y horizontal.'
          ]}
        />
      </CardWithImages>
      <CardWithImages
        title="IE (Matriz interna y externa)"
        Image={
          <ImageGallery
            showNav={false}
            showPlayButton={false}
            items={imagesIE}
          />
        }
        description="Apple se ubica en el cuadrante V ya que posee una posición externa 
        media y una posición interna promedio, dándonos a entender que se encuentra en 
        la denominación conservar y mantener, por lo que se le recomienda las estrategias 
        planteadas en la matriz IE, las cuales implican:"
      >
        <ListCheck
          data={[
            'Invertir en publicidad.',
            'Incrementar el número de vendedores.',
            'Incrementar las ventas mediante el mejoramiento de los productos.',
            'Desarrollar nuevos productos.',
            'Invertir en investigación e innovación.'
          ]}
        />
      </CardWithImages>
      <Divider />
      <Title level={3}>Etapa de las Decisiones</Title>
      <Divider />
      <CardWithImages
        title="MPEC (Matriz de planeación estratégica cuantitativa)"
        Image={
          <ImageGallery
            showNav={false}
            showPlayButton={false}
            items={imagesMPEC}
          />
        }
        description="Apple Inc. es una empresa muy grande, que tiene buena participación 
        en el mercado, tiene buenos productos, pero para una clientela limitada. La gama alta 
        reduce en medida la cantidad de ventas debido a que existe muy poca gente con los medios para
        comprar. La matriz MPEC nos indica que la estrategia más adecuada en estos aspectos será 
        la de desarrollo de productos."
      />
      <Divider />
    </LayoutApp>
  );
}
