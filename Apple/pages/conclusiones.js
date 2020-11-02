import { Divider, Typography } from 'antd';

import LayoutApp from './components/layout';
import MainTitle from './components/main-title';
import ListCheck from './components/list-check';

const dataConclusiones = [
  `APPLE INC tiene una posición competitiva fuerte respecto a todos sus competidores y se
        mantiene como uno de los líderes en el mercado de la tecnología por lo tanto se pronostica
        que tendrá un crecimiento y aprovechará su situación en el mercado gestionando lugares
        estratégicos para fortalecer sus ventas.`,
  `Conseguir mantenerse en el mercado requiere de decisiones acertadas, como la creación de
        grupos de trabajo en investigación e innovación para conseguir nuevas demandas de los
        consumidores.`,
  `La pandemia genera un reto enorme a APPLE inc, para iniciar nuevas estrategias de trabajo
        tanto internas como externas en la empresa.`,
  `La fidelidad de los clientes en el mercado, en plena pandemia, es gracias al buen trabajo
        desarrollado por varios años.`
];

const dataRecomendaciones = [
  `Para realizar un buen plan estratégico es importante realizar adecuadamente el FODA.`,
  `Tener buena capacidad de calificar los criterios en los que se pone en comparación mas
  de una empresa, tales son los cuadros: EFE, MPC, EFI, PEEA y MPEC.`,
  `A pesar que APPLE INC tiene un buen número de clientes, invertir en publicidad y/o
  marketing podría aumentar considerablemente este número.`,
  `Los cambios, que se realizan frente a un problema, son oportunidades que se deben
  aprovechar para así de esa forma, la empresa se enriquecerá de experiencia en
  solucionarlos.`,
  `Decidir bien los países donde se fabricarán los productos ofrecidos por la empresa, ya
  que estos pueden afectar el trabajo y expectativas de la empresa si existe alguna
  tensión entre ellas, APPLE INC tiene su sede principal en EEUU y sus productos lo
  fabrica en CHINA y estos dos países durante los últimos años tuvieron malas relaciones
  el cual genera una incertidumbre en el mercado del mundo.`
];

export default function Conclusiones() {
  return (
    <LayoutApp title="Apple - Conclusiones" current="conclusiones">
      <Typography style={{ marginBottom: '20px' }}>
        <MainTitle title="Conclusiones" />
      </Typography>
      <ListCheck data={dataConclusiones} width="75%" />
      <Typography style={{ marginBottom: '20px' }}>
        <MainTitle title="Recomendaciones" />
      </Typography>
      <ListCheck data={dataRecomendaciones} width="75%" />
      <Divider />
    </LayoutApp>
  );
}
